import * as React from 'react'
import Img from 'gatsby-image'
import styles from './About.module.scss'
import Section from '../../components/Section';
import { AboutSectionQueryResult } from '../../pages';

interface AboutSectionProps {
  data: AboutSectionQueryResult;
}

export default class About extends React.Component<AboutSectionProps, {}> {
  public render() {
    const { frontmatter, html } = this.props.data;
    return (
      <Section id="about" title={frontmatter.title} className={styles.AboutContainer}>
        <div className={styles.FlexContainer}>
          <div className={styles.ContentContainer}>
            <div dangerouslySetInnerHTML={{ __html: html }} />
            <ul className={styles.SkillsContainer}>
              {frontmatter.skills.map((skill) => <li key={skill} className={styles.Skill}>{skill}</li>)}
            </ul>
          </div>
          <div className={styles.PicContainer}>
              <div className={styles.AvatarContainer}>
                <Img className={styles.Avatar} fluid={frontmatter.avatar.childImageSharp.fluid}></Img>
              </div>
          </div>
        </div>
      </Section>
    )
  }
}
