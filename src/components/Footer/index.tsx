import * as React from 'react'
import styles from './Footer.module.scss'
import { GithubIcon, LinkedInIcon, InstagramIcon, TwitterIcon } from '../Icon';

export default class Footer extends React.Component<{}, {}> {
  public render() {
    return (
      <footer className={styles.FooterContainer}>
        <div className={styles.SocialContainer}>
          <ul className={styles.SocialItemList}>
            <li className={styles.SocialItem}>
              <a href="https://github.com/viralpickaxe" target="_blank"><GithubIcon /></a>
            </li>
            <li className={styles.SocialItem}>
              <a href="https://www.linkedin.com/in/viralpickaxe" target="_blank"><LinkedInIcon /></a>
            </li>
            <li className={styles.SocialItem}>
              <a href="https://instagram.com/viralpickaxe" target="_blank"><InstagramIcon /></a>
            </li>
            <li className={styles.SocialItem}>
              <a href="https://twitter.com/viralpickaxe" target="_blank"><TwitterIcon /></a>
            </li>
          </ul>
        </div>
        <p className={styles.Copy}>
          <a className={styles.CopyLink} href="https://github.com/viralpickaxe" target="_blank">Built by Jamie Davies</a>
        </p>
      </footer>
    )
  }
}
