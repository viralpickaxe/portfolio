import * as React from 'react'
import styles from './Jobs.module.scss'
import Section from '../../components/Section';

export interface JobsState {
  tab: number;
}

export interface Job {
  company: string;
  role: string;
  period: string;
  description: string[];
}

export default class Jobs extends React.Component<{}, JobsState> {
  public jobs: Job[] = [
    {
      company: 'Yieldify',
      role: 'Software Engineer',
      period: 'Aug 2017 - Present',
      description: [
        'Software Engineer on the team that builds the third-party Javascript application, backend microservices and serving infrastructure elements of the Yieldify Conversion Platform.',
        'Involved in the hiring and interview process for engineering candidates in CV reviews, take home tests and technical white-boarding interviews.',
        'Built internal tools in own time to improve productivity of team, such as a chrome extension to improve our work#ow in Jira, a GitHub PR bot to maintain consistency across repos and an auto package bumper to keep internal modules up to date across projects the large number of repos they’re used in.',
      ],
    },
    {
      company: 'TalkLife',
      role: 'Full Stack Developer',
      period: 'Feb 2015 - Aug 2017',
      description: [
        'Built a confidential messaging service that connects patients to licensed therapists for a low monthly cost enabling anyone access to a therapist when they need it most.',
        'Designed and built an admin/overview dashboard that views and controls all the different TalkLife related services.',
        'Came up with and prototyped new ideas, using different technologies to test their feasibility and demo to investors.',
        'Worked alongside the bright minds at MIT, Harvard and Microsoft Research to work on an incredible research project involving mental health and suicide intervention.',
        'Built multiple internal tools used in processing large amounts of data to assist in tasks like moderation and suicide intervention.',
      ],
    },
    {
      company: 'Doorpass',
      role: 'Co-Founder and Software Engineer',
      period: 'Jun 2016 - May 2017',
      description: [
        'Built and maintained a large microservices based web application with a fast single page web application frontend. All written in TypeScript using Node.js and React.',
        'Worked with hundreds of different APIs for different platforms to build platform integrations.',
        'When APIs weren\'t available I had to reverse engineer 3rd party platforms and build complex Web Bots to implement the features that we required.',
        'Worked with complex crypto algorithms including Shamar Secret Sharing to ensure users data was secure from both external and internal threats.',
      ],
    },
    {
      company: 'whatleads.to',
      role: 'Co-Founder and Developer',
      period: 'Jan 2014 - Feb 2015',
      description: [
        'Founded in December 2013 and pitched to receive incubator funding from Bethnal Green Ventures.',
        'Built a scalable API and web app able to handle thousands of concurrent connections.',
        'Built the entire back-end and dynamic front-end codebase to work on the distributed infrastructure while keeping load times and bandwidth usage low.',
      ],
    },
  ];

  public constructor(props: {}) {
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
            {this.jobs.map((job, i) => (
              <button
                key={i}
                className={styles.Tab}
                onClick={() => this.switchTab(i)}
                data-active={i === this.state.tab}
              >
                <span>{job.company}</span>
              </button>
            ))}
            <div className={styles.TabHighlight} style={{top: this.state.tab * 42}} />
          </div>
          <div className={styles.TabContentContainer}>
            {this.jobs.map((job, i) => (
              <div
                key={i}
                className={styles.TabContent}
                style={i === this.state.tab ? { opacity: 1, visibility: 'visible', transition: 'all 0.5s ease-in-out 0s', position: 'relative' } : {}}
              >
                <h4 className={styles.JobTitle}>{job.role} <strong>@ {job.company}</strong></h4>
                <h4 className={styles.JobPeriod}>{job.period}</h4>
                <p>
                  <ul>
                    {job.description.map((line, i) => <li key={i}>{line}</li>)}
                  </ul>
                </p>
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
