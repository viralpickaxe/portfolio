import * as React from 'react'
import styles from './Contact.module.scss'
import Section from '../../components/Section';

export default class Contact extends React.Component<{}, {}> {
  public render() {
    return (
      <Section id="contact" title="What's Next?" className={styles.ContactContainer}>

      </Section>
    )
  }
}
