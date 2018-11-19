import * as React from 'react'
import styles from './Hero.module.scss'
import Button from '../../components/Button';
import Link from '../../components/Link';
import Section from '../../components/Section';

export default class Hero extends React.Component<{}, {}> {
  public render() {
    return (
      <Section id="hero" className={styles.HeroContainer}>
        <h1 className={styles.Hi}>Hi, my name is</h1>
        <h2 className={styles.Name}>Jamie Davies.</h2>
        <h1 className={styles.Subtitle}>I like to build things.</h1>
        <div className={styles.Blurb}>
          <p>
            I'm a Software Engineer based in London specializing in developing exceptional,
            high-quality websites and applications. I'm currently working
            at <Link href="http://yieldify.com" newTab={true}>Yieldify</Link> as a Software Engineer.
          </p>
        </div>
        <div className={styles.Contact}>
          <Button href="mailto:jamie@iamjamiedavies.com">Get In Touch</Button>
        </div>
      </Section>
    )
  }
}
