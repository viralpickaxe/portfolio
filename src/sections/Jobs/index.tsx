import * as React from 'react'
import styles from './Jobs.module.scss'
import Section from '../../components/Section';

export default class Jobs extends React.Component<{}, {}> {
  public render() {
    return (
      <Section id="jobs" title="Where I've Worked" className={styles.JobsContainer}>

      </Section>
    )
  }
}
