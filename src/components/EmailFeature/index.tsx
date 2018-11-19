import * as React from 'react'
import styles from './EmailFeature.module.scss'

export default class EmailFeature extends React.Component<{}, {}> {
  public render() {
    return (
      <div className={styles.EmailContainer}>
        <div>
          <div className={styles.EmailLinkWrapper}>
            <a href="mailto:jamie@iamjamiedavies.com" className={styles.EmailLink}>jamie@iamjamiedavies.com</a>
          </div>
        </div>
      </div>
    )
  }
}
