import * as React from 'react'
import styles from './Footer.module.scss'

export default class Footer extends React.Component<{}, {}> {
  public render() {
    return (
      <footer className={styles.FooterContainer}>
        <p className={styles.Copy}>
          <a className={styles.CopyLink} href="https://github.com/viralpickaxe" target="_blank">Built by Jamie Davies</a>
        </p>
      </footer>
    )
  }
}
