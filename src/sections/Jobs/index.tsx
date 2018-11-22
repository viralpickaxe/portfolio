import * as React from 'react'
import styles from './Jobs.module.scss'
import Section from '../../components/Section';
import Link from '../../components/Link';
import { JobSectionQueryResult } from '../../pages';

interface JobsSectionProps {
  jobs: JobSectionQueryResult[];
}

export interface JobsState {
  tab: number;
}

export interface Job {
  company: string;
  url?: string;
  role: string;
  period: string;
  description: string[];
}

export default class Jobs extends React.Component<JobsSectionProps, JobsState> {
  public constructor(props: JobsSectionProps) {
    super(props);
    this.state = {
      tab: 0,
    };
  }

  public render() {
    return (
      <Section id="jobs" title="Where I've Worked" className={styles.JobsContainer}>
        <div className={styles.TabsContainer}>
          <div className={styles.TabList}>
            {this.props.jobs.map(({ frontmatter }, i) => (
              <button
                key={i}
                className={styles.Tab}
                onClick={() => this.switchTab(i)}
                data-active={i === this.state.tab}
              >
                <span>{frontmatter.company}</span>
              </button>
            ))}
            <div className={styles.TabHighlight} style={{top: Number(this.state.tab) * 42}} />
          </div>
          <div className={styles.TabContentContainer}>
            {this.props.jobs.map(({ frontmatter, html }, i) => (
              <div
                key={i}
                className={styles.TabContent}
                style={i === this.state.tab ? { opacity: 1, visibility: 'visible', transition: 'all 0.5s ease-in-out 0s', zIndex: 2, position: 'relative' } : {}}
              >
                <h4 className={styles.JobTitle}>{frontmatter.role} <strong>@ {frontmatter.url ? <Link href={frontmatter.url} newTab={true}>{frontmatter.company}</Link> : frontmatter.company}</strong></h4>
                <h4 className={styles.JobPeriod}>{frontmatter.period}</h4>
                <div dangerouslySetInnerHTML={{ __html: html }} />
              </div>
            ))}
          </div>
        </div>
      </Section>
    )
  }

  private switchTab(tab: number): void {
    this.setState({ tab });
  }
}
