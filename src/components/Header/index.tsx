import * as React from 'react'
import { Spring } from 'react-spring'
import styles from './Header.module.scss'
import Button from '../Button';
import { animationDelays } from '../../animation-time-book';

interface HeaderState {
  lastScrollTop: number;
  scrollDirection: 'up' | 'down' | 'none';
}

export interface NavLink {
  anchor: string;
  text: string;
}

const SCROLL_DELTA = 5;
const HEADER_HEIGHT = 100;

export default class Header extends React.Component<{}, HeaderState> {
  public navLinks: NavLink[] = [
    { anchor: 'about', text: 'About'},
    { anchor: 'jobs', text: 'Experience'},
    { anchor: 'featured', text: 'Work'},
    { anchor: 'contact', text: 'Contact'},
  ];

  public constructor(props: {}) {
    super(props);

    this.state = {
      lastScrollTop: 0,
      scrollDirection: 'none',
    }
  }

  public componentDidMount() {
    window.addEventListener('scroll', () => this.handleScroll());
  }

  public componentWillUnmount() {
    window.removeEventListener('scroll', () => this.handleScroll());
  }

  public handleScroll() {
    const { lastScrollTop, scrollDirection } = this.state;
    const fromTop = window.scrollY;

    if (Math.abs(lastScrollTop - fromTop) <= SCROLL_DELTA) {
      return;
    }

    if (fromTop < SCROLL_DELTA) {
      this.setState({ scrollDirection: 'none' });
    } else if (fromTop > lastScrollTop && fromTop > HEADER_HEIGHT) {
      if (scrollDirection !== 'down') {
        this.setState({ scrollDirection: 'down' });
      }
    } else if (fromTop + window.innerHeight < document.body.scrollHeight) {
      if (scrollDirection !== 'up') {
        this.setState({ scrollDirection: 'up' });
      }
    }

    this.setState({ lastScrollTop: fromTop });
  };

  public render() {
    let className = styles.HeaderContainer;

    if (this.state.scrollDirection === 'down' && this.state.lastScrollTop > 120) {
      className = [styles.HeaderContainer, styles.Hidden].join(' ');
    } else if (this.state.lastScrollTop > SCROLL_DELTA) {
      className = [styles.HeaderContainer, styles.Scrolling].join(' ');
    }

    return (
      <header className={className}>
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
                      <a href={`#${navLink.anchor}`} className={styles.NavLink}>{navLink.text}</a>
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
