import * as React from 'react'
import styles from './Projects.module.scss'
import Section from '../../components/Section';

export default class Projects extends React.Component<{}, {}> {
  public render() {
    return (
      <Section id="projects" title="Some Things I've Built" className={styles.ProjectsContainer}>

      </Section>
    )
  }
}
