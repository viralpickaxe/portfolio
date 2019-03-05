import * as React from 'react'
import Img from 'gatsby-image'
import styles from './Featured.module.scss'
import Section from '../../components/Section';
import { FeaturedSectionQueryResult } from '../../pages';
import { ExternalIcon } from '../../components/Icon';

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
                <div className={styles.ProjectDescription} dangerouslySetInnerHTML={{ __html: html }} />
                <ul className={styles.TechList}>
                  {frontmatter.tech.map((tech) => <li key={tech}>{tech}</li>)}
                </ul>
                {frontmatter.links !== null ? (
                  <div className={styles.Links}>
                    {frontmatter.links.map((link) => (
                      <a key={link} href={link} target="_blank"><ExternalIcon /></a>
                    ))}
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
