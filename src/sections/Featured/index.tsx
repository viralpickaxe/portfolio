import * as React from 'react'
import Img from 'gatsby-image'
import styles from './Featured.module.scss'
import Section from '../../components/Section';
import { FeaturedSectionQueryResult } from '../../pages';

interface FeaturedSectionProps {
  projects: FeaturedSectionQueryResult[];
}

export default class Featured extends React.Component<FeaturedSectionProps, {}> {
  public render() {
    return (
      <Section id="featured" title="Some Things I've Built" className={styles.FeaturedContainer}>
        <div className={styles.FeaturedGrid}>
          {this.props.projects.map(({ frontmatter, html }, i) => (
            <div key={i} className={styles.Project}>
              <div className={styles.ContentContainer}>
                <h4 className={styles.FeaturedLabel}>Featured Project</h4>
                <h5 className={styles.ProjectName}>{frontmatter.title}</h5>
                <div className={styles.ProjectDescription}>
                  <p dangerouslySetInnerHTML={{ __html: html }}></p>
                </div>
                <ul className={styles.TechList}>
                  {frontmatter.tech.map((tech) => <li key={tech}>{tech}</li>)}
                </ul>
                {frontmatter.links !== null ? (
                  <div className={styles.Links}>
                    <a><svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 194.818 194.818"><title>External</title><g><path d="M185.818,2.161h-57.04c-4.971,0-9,4.029-9,9s4.029,9,9,9h35.312l-86.3,86.3c-3.515,3.515-3.515,9.213,0,12.728 c1.758,1.757,4.061,2.636,6.364,2.636s4.606-0.879,6.364-2.636l86.3-86.3v35.313c0,4.971,4.029,9,9,9s9-4.029,9-9v-57.04 C194.818,6.19,190.789,2.161,185.818,2.161z"></path><path d="M149,77.201c-4.971,0-9,4.029-9,9v88.456H18v-122h93.778c4.971,0,9-4.029,9-9s-4.029-9-9-9H9c-4.971,0-9,4.029-9,9v140 c0,4.971,4.029,9,9,9h140c4.971,0,9-4.029,9-9V86.201C158,81.23,153.971,77.201,149,77.201z"></path></g></svg></a>
                  </div>
                ) : null}
              </div>
              <div className={styles.ImageContainer}>
                <div className={styles.FeaturedImage}>
                  <Img fluid={frontmatter.cover.childImageSharp.fluid}></Img>
                </div>
              </div>
            </div>
          ))}
        </div>
      </Section>
    )
  }
}
