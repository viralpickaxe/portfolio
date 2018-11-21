import * as React from 'react'
import styles from './Projects.module.scss'
import Section from '../../components/Section';

export default class Projects extends React.Component<{}, {}> {
  public render() {
    return (
      <Section id="projects" title="Some Things I've Built" className={styles.ProjectsContainer}>
        <div className={styles.FeaturedGrid}>
          <div className={styles.Project}>
            <div className={styles.ContentContainer}>
              <h4 className={styles.FeaturedLabel}>Featured Project</h4>
              <h5 className={styles.ProjectName}>Test Name</h5>
              <div className={styles.ProjectDescription}>
                <p>Just some plain olde bull shite. Just some plain olde bull shite. Just some plain olde bull shite. Just some plain olde bull shite. Just some plain olde bull shite. Just some plain olde bull shite.</p>
              </div>
              <ul className={styles.TechList}>
                <li>Some</li>
                <li>Random</li>
                <li>Ass</li>
                <li>Tech</li>
              </ul>
              <div className={styles.Links}>
                <a><svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 194.818 194.818"><title>External</title><g><path d="M185.818,2.161h-57.04c-4.971,0-9,4.029-9,9s4.029,9,9,9h35.312l-86.3,86.3c-3.515,3.515-3.515,9.213,0,12.728 c1.758,1.757,4.061,2.636,6.364,2.636s4.606-0.879,6.364-2.636l86.3-86.3v35.313c0,4.971,4.029,9,9,9s9-4.029,9-9v-57.04 C194.818,6.19,190.789,2.161,185.818,2.161z"></path><path d="M149,77.201c-4.971,0-9,4.029-9,9v88.456H18v-122h93.778c4.971,0,9-4.029,9-9s-4.029-9-9-9H9c-4.971,0-9,4.029-9,9v140 c0,4.971,4.029,9,9,9h140c4.971,0,9-4.029,9-9V86.201C158,81.23,153.971,77.201,149,77.201z"></path></g></svg></a>
              </div>
            </div>
            <div className={styles.ImageContainer}>
              <div className={styles.FeaturedImage}>
                <div></div>
                <img src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='400' height='250' viewBox='0 0 400 250' version='1'%3e%3cpath d='M0 29v28h11c35-2 64-13 91-32 8-6 12-7 5-1-25 20-61 33-94 35H0v94h20l45 1h24v17H28v-8c0-9 1-9-16-9H0v35l5 1c19 6 40 9 56 9h13l2 4 3 5c0 5-55 0-77-8-2 0-2 2-2 25v25h234l22-10c34-16 52-22 81-28 18-4 55-9 62-9l1 23 1-101V0H0v29m90 27c0 3 0 3-3 3-6 0-9 6-5 11 2 2 3 3 8 3h6V54h-3c-3 0-3 0-3 2m8 7l1 10h5c7 0 10-2 10-7 0-4-3-7-7-7-3 0-3-1-3-3s0-2-3-2h-3v9m59 0v10h6l8-2c4-4 1-12-5-12-3 0-3 0-3-3 0-2 0-2-3-2h-3v9m18-1c0 10 1 11 6 11 2 0 3-4 1-5s-2-3-2-7c0-7 0-7-2-7-3 0-3 0-3 8m31 1c0 6 1 8 2 9h7c1-1 0-4-2-4l-1-2 2-2 1-2-1-2-2-2c0-2-1-2-3-2h-3v7M32 59c-7 3-3 14 4 13h2l-4 1c-4-1-6 2-2 4 8 3 12 0 12-12l1-5-4-1h-9m18 1c-7 3-4 13 4 13 7 0 10-8 6-13-3-2-5-3-10 0m17-1c-5 3-6 8-2 12 5 4 14 1 14-5 0-3-3-7-5-7h-7m72 0c-7 1-8 10-2 13 4 2 12 0 9-3l-4-1h-2l4-1c4-1 5-2 3-6-2-2-5-3-8-2m57 0c-5 1-5 7 0 9l4 1h-4c-2-1-3-1-4 1-1 3 7 4 11 1 4-2 2-6-3-7-2-1-2-1 0-1 3 0 5-2 4-3s-6-2-8-1m25 0l-4 4c-3 6 4 11 10 10 4-1 4-4 0-5-5 0-4-1 0-2 4 0 5-1 5-2l-1-2-3-3h-7m21 0h-9v7c0 6 1 7 3 7 3 0 3 0 3-4 0-3 0-4 2-5 1 0 2-1 2-3 0-3 0-3-1-2m6 0c-1 0-3 1-3 3-2 3-1 4 4 6l4 1-4-1c-3 0-4 0-4 2-1 2 1 3 4 3 9 0 11-8 3-9-2-1-2-1 1-1 2 0 5-2 3-3-1-1-6-2-8-1m-132 5l1 6c2 1 2 1 0 3s-1 3 2 4c7 3 12-1 12-11v-7h-3c-3 0-3 0-3 4-1 5-3 5-3 0 0-4 0-4-3-4s-3 0-3 5M29 93v10h3c3 0 3 0 3-4 1-6 3-6 3-1s0 5 3 5 3 0 3-5c0-7-2-9-6-9-2 1-3 0-3-2s-1-3-3-3h-3v9m35-8v16c2 3 7 3 7 0l-1-2-1-7c0-8 0-8-2-8l-3 1m9 7c0 9 1 11 5 11 2 0 3 0 3-2l-1-2-1-7c0-7-1-8-3-8h-3v8m34 1v10h3c3 0 3 0 3-4s0-5 2-5l1 5c0 4 0 4 3 4s3 0 3-5c0-7-2-10-6-9-2 1-3 0-3-2s-1-3-3-3h-3v9m97-7c-2 1-2 2-2 9v8h3c3 0 3 0 3-4s0-5 2-5l1 3c0 3 3 6 8 6l6-1c1-2-2-4-5-3-4 0-2-1 2-2s5-4 2-6c-4-3-8-2-11 0l-2 2-2-3v-1l2-3c0-2-4-3-7 0m40 2c-1 2 1 13 2 14h8l-2-3c-2-2-3-4 0-5l1-2-1-2-2-2c0-2-5-3-6 0M48 91c-5 6-1 12 6 12l6-1c1-2-2-4-5-3-3 0 0-2 4-2 2-1 3-1 2-3-1-5-9-7-13-3m38-1c-3 0-5 5-4 8 2 5 10 7 14 3 5-6-1-14-10-11m40 1c-3 3-3 8 0 10 1 2 3 2 8 2h6V90l-6-1c-5 0-6 0-8 2m16 8v9h3c3 0 3 0 3-2 0-3 0-3 3-3 6 0 9-6 5-11-2-2-3-3-8-3h-6v10m18-9l-1 9v9h3c3 0 3 0 3-2 0-3 0-3 3-3 7 0 10-9 5-12-2-2-12-2-13-1m17 3c0 7 1 9 6 9 2 0 3 0 2 1l-3 1c-3-1-4-1-4 1-1 2 1 3 6 3 6 0 8-2 8-12v-7h-3c-2 0-3 1-3 4l-1 4-2-4c0-3-1-4-3-4-3 0-3 0-3 4m53-2c-5 4-2 12 5 12l6-1c2-1-2-4-5-3-4 0-2-1 3-2 4-1 5-2 2-5s-8-4-11-1m94 35l-16 2c-33 3-57 9-99 25l-15 7-1 4v6l22-7a322 322 0 0 1 93-23l3-1c5-3 54-3 84 1h5v-10l-6-1c-20-2-66-4-70-3m-160 46c-13 5-16 6-19 5-4 0-4 0-2 1s2 1-1 2a478 478 0 0 1-57 19l3 5 3 4 9-3c13-3 26-7 48-16l20-7 10 1a195 195 0 0 0 39-3c-19 1-32 2-38 1h-8l5-2c7-4 7-4 7-9 0-6 0-6-19 2' fill='%2364ffda' fill-rule='evenodd'/%3e%3c/svg%3e" />
              </div>
            </div>
          </div>
        </div>
      </Section>
    )
  }
}
