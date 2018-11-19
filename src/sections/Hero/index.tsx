import * as React from 'react'
import { Spring } from 'react-spring'
import styles from './Hero.module.scss'
import Button from '../../components/Button';
import Link from '../../components/Link';
import Section from '../../components/Section';
import { animationDelays } from '../../animation-time-book';

export default class Hero extends React.Component<{}, {}> {
  public render() {
    const iD = animationDelays.heroContent;
    return (
      <Section id="hero" className={styles.HeroContainer}>
        <Spring delay={iD} from={{ opacity: 0, top: 40 }} to={{ opacity: 1, top: 0 }}>
          { style => <h1 className={styles.Hi} style={style}>Hi, my name is</h1> }
        </Spring>
        <Spring delay={iD + 150} from={{ opacity: 0, top: 40 }} to={{ opacity: 1, top: 0 }}>
          { style => <h2 className={styles.Name} style={style}>Jamie Davies.</h2> }
        </Spring>
        <Spring delay={iD + 300} from={{ opacity: 0, top: 40 }} to={{ opacity: 1, top: 0 }}>
          { style => <h1 className={styles.Subtitle} style={style}>I like to build things.</h1> }
        </Spring>
        <Spring delay={iD + 450} from={{ opacity: 0, top: 40 }} to={{ opacity: 1, top: 0 }}>
          { style => (
            <div className={styles.Blurb} style={style}>
              <p>
                I'm a Software Engineer based in London specializing in developing exceptional,
                high-quality websites and applications. I'm currently working
                at <Link href="http://yieldify.com" newTab={true}>Yieldify</Link> as a Software Engineer.
              </p>
            </div>
          )}
        </Spring>
        <Spring delay={iD + 600} from={{ opacity: 0, top: 40 }} to={{ opacity: 1, top: 0 }}>
          { style => (
            <div className={styles.Contact} style={style}>
              <Button href="mailto:jamie@iamjamiedavies.com">Get In Touch</Button>
            </div>
          )}
        </Spring>
      </Section>
    )
  }
}
