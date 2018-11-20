import * as React from 'react'
import { Spring } from 'react-spring'
import styles from './Header.module.scss'
import Button from '../Button';
import { animationDelays } from '../../animation-time-book';

export interface NavLink {
  anchor: string;
  text: string;
}

export default class Header extends React.Component<{}, {}> {
  public navLinks: NavLink[] = [
    { anchor: 'about', text: 'About'},
    { anchor: 'jobs', text: 'Experience'},
    { anchor: 'projects', text: 'Work'},
    { anchor: 'contact', text: 'Contact'},
  ];

  public render() {
    return (
      <header className={styles.HeaderContainer}>
        <nav className={styles.Navbar}>
          <div></div>
          <div></div>
          <div className={styles.NavLinks}>
            <ol className={styles.NavList}>
              {this.navLinks.map((navLink, i) => (
                <Spring
                  key={navLink.anchor}
                  delay={animationDelays.navBarLinks + (i * 150)}
                  from={{ opacity: 0, top: -20 }} to={{ opacity: 1, top: 0 }}>
                  { (style) => (
                    <li className={styles.NavListItem} style={style}>
                      <a href={navLink.anchor} className={styles.NavLink}>{navLink.text}</a>
                    </li>
                  )}
                </Spring>
              ))}
            </ol>
            <div>
              <Spring
                delay={animationDelays.navBarLinks + (this.navLinks.length * 150)}
                from={{ opacity: 0, top: -20 }} to={{ opacity: 1, top: 0 }}>
                { (style) => (
                  <Button className={styles.ResumeButton} style={style} href="/CV_2018.pdf">Resume</Button>
                )}
                </Spring>
            </div>
          </div>
        </nav>
      </header>
    )
  }
}
