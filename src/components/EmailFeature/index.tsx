import * as React from 'react'
import { Spring } from 'react-spring'
import styles from './EmailFeature.module.scss'
import { animationDelays } from '../../animation-time-book';

export default class EmailFeature extends React.Component<{}, {}> {
  public render() {
    return (
      <Spring delay={animationDelays.emailFeature} from={{ opacity: 0 }} to={{ opacity: 1 }}>
        { style => (
          <div className={styles.EmailContainer} style={style}>
            <div>
              <div className={styles.EmailLinkWrapper}>
                <a href="mailto:jamie@iamjamiedavies.com" className={styles.EmailLink}>jamie@iamjamiedavies.com</a>
              </div>
            </div>
          </div>
        )}
      </Spring>
    )
  }
}
