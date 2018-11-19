import * as React from 'react'
import styles from './About.module.scss'
import Section from '../../components/Section';

export default class About extends React.Component<{}, {}> {
  private skills: string[] = [
    'JavaScript',
    'TypeScript',
    'Node.js',
    'React',
    'HTML & CSS',
    'Python',
    'PHP',
    'Docker',
    'SQL',
    'noSQL',
  ];

  public render() {
    return (
      <Section id="about" title="About Me" className={styles.AboutContainer}>
        <div className={styles.FlexContainer}>
          <div className={styles.ContentContainer}>
            <p>Hey there! I’m a young versatile Software Engineer who lives to build beautiful products from the ground up. I started programming at the age of 8, and at 14 raised funding for my first start-up.</p>
            <p>For the past 5+ years, I've been honing my skills in web, backend and more recently iOS development. I enjoy constantly learning and improving my skills with the technologies that keep evolving in this ever-changing field!</p>
            <p>Here's a few things I'm experienced with:</p>
            <ul className={styles.SkillsContainer}>
              {this.skills.map((skill) => <li key={skill} className={styles.Skill}>{skill}</li>)}
            </ul>
          </div>
          <div className={styles.PicContainer}>
              <div className={styles.AvatarContainer}>
                <img className={styles.Avatar} src="https://scontent-lhr3-1.xx.fbcdn.net/v/t1.0-9/40840086_2022116097808954_8473296246746906624_o.jpg?_nc_cat=104&_nc_ht=scontent-lhr3-1.xx&oh=cf4555c9ff80ce4441001eefc0b90a62&oe=5C7700E1" />
              </div>
          </div>
        </div>
      </Section>
    )
  }
}
