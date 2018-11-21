import * as React from 'react'
import styles from './Contact.module.scss'
import Section from '../../components/Section';
import Link from '../../components/Link';
import Button from '../../components/Button';

export default class Contact extends React.Component<{}, {}> {
  public render() {
    return (
      <Section id="contact" title="What's Next?" className={styles.ContactContainer}>
        <h4 className={styles.Title}>Get in Touch</h4>
        <p>I'm not currently looking for new work, but feel free to get in touch to say hi! You can also <Link href="https://datejamie.com" newTab={true}>apply</Link> to date me, and I'll probably get back to you faster.</p>
        <Button href="mailto:jamie@iamjamiedavies.com" className={styles.EmailLink}>Say Hello</Button>
      </Section>
    )
  }
}
