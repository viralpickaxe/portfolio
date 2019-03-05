import * as React from 'react'
import { Spring } from 'react-spring'
import styles from './SocialFeature.module.scss'
import { animationDelays } from '../../animation-time-book';
import { GithubIcon, LinkedInIcon, InstagramIcon, TwitterIcon } from '../Icon';

export default class SocialFeature extends React.Component<{}, {}> {
  public render() {
    return (
      <Spring delay={animationDelays.socialFeature} from={{ opacity: 0 }} to={{ opacity: 1 }}>
        { style => (
          <div className={styles.SocialContainer} style={style}>
            <div>
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
          </div>
        )}
      </Spring>
    )
  }
}
