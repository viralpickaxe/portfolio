import * as React from 'react'
import styles from './Header.module.scss'
import Button from '../Button';

export default class Header extends React.Component<{}, {}> {
  public render() {
    return (
      <header className={styles.HeaderContainer}>
        <nav className={styles.Navbar}>
          <div></div>
          <div></div>
          <div className={styles.NavLinks}>
            <ol className={styles.NavList}>
              <li className={styles.NavListItem}>
                <a href="#about" className={styles.NavLink}>About</a>
              </li>
              <li className={styles.NavListItem}>
                <a href="#jobs" className={styles.NavLink}>Experience</a>
              </li>
              <li className={styles.NavListItem}>
                <a href="#projects" className={styles.NavLink}>Work</a>
              </li>
              <li className={styles.NavListItem}>
                <a href="#contact" className={styles.NavLink}>Contact</a>
              </li>
            </ol>
            <div>
              <Button className={styles.ResumeButton} href="/CV_2018.pdf">Resume</Button>
            </div>
          </div>
        </nav>
      </header>
    )
  }
}
