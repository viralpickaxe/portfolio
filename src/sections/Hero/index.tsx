import * as React from 'react'
import { Spring } from 'react-spring'
import styles from './Hero.module.scss'
import Button from '../../components/Button';
import Link from '../../components/Link';
import Section from '../../components/Section';
import { animationDelays } from '../../animation-time-book';
import { HeroSectionQueryResult } from '../../pages';

interface HeroSectionProps {
  data: HeroSectionQueryResult;
}

export default class Hero extends React.Component<HeroSectionProps, {}> {
  public render() {
    const { frontmatter, html } = this.props.data;
    const iD = animationDelays.heroContent;

    return (
      <Section id="hero" className={styles.HeroContainer}>
        <Spring delay={iD} from={{ opacity: 0, top: 40 }} to={{ opacity: 1, top: 0 }}>
          { style => <h1 className={styles.Title} style={style}>{frontmatter.title}</h1> }
        </Spring>
        <Spring delay={iD + 150} from={{ opacity: 0, top: 40 }} to={{ opacity: 1, top: 0 }}>
          { style => <h2 className={styles.Name} style={style}>{frontmatter.name}</h2> }
        </Spring>
        <Spring delay={iD + 300} from={{ opacity: 0, top: 40 }} to={{ opacity: 1, top: 0 }}>
          { style => <h1 className={styles.Subtitle} style={style}>{frontmatter.subtitle}</h1> }
        </Spring>
        <Spring delay={iD + 450} from={{ opacity: 0, top: 40 }} to={{ opacity: 1, top: 0 }}>
          { style => (
            <div className={styles.Blurb} style={style}>
              <p dangerouslySetInnerHTML={{ __html: html }}></p>
            </div>
          )}
        </Spring>
        <Spring delay={iD + 600} from={{ opacity: 0, top: 40 }} to={{ opacity: 1, top: 0 }}>
          { style => (
            <div className={styles.Contact} style={style}>
              <Button href={frontmatter.contactLink}>{frontmatter.contactText}</Button>
            </div>
          )}
        </Spring>
      </Section>
    )
  }
}
