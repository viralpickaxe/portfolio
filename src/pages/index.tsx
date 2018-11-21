import * as React from 'react'
import { graphql } from 'gatsby';
import styles from './index.module.scss'
import Header from '../components/Header';
import Footer from '../components/Footer';
import SocialFeature from '../components/SocialFeature';
import EmailFeature from '../components/EmailFeature';
import Hero from '../sections/Hero';
import About from '../sections/About';
import Jobs from '../sections/Jobs';
import Projects from '../sections/Projects';
import Contact from '../sections/Contact';
import Head from '../components/Head';

interface IndexPageProps {
  data: {
    hero: {
      edges: {
        node: HeroSectionQueryResult
      }[]
    }
    about: {
      edges: {
        node: AboutSectionQueryResult
      }[]
    }
    jobs: {
      edges: {
        node: JobSectionQueryResult
      }[]
    }
  }
}

export default class IndexPage extends React.Component<IndexPageProps, {}> {
  public render() {
    return (
      <div>
        <Head />
        <Header />
        <main className={styles.Main}>
          <Hero data={this.props.data.hero.edges[0].node} />
          <About data={this.props.data.about.edges[0].node} />
          <Jobs jobs={this.props.data.jobs.edges.map((({ node }) => node))} />
          <Projects />
          <Contact />
        </main>
        <Footer />
        <SocialFeature />
        <EmailFeature />
      </div>
    )
  }
};

export interface HeroSectionQueryResult {
  frontmatter: {
    title: string;
    name: string;
    subtitle: string;
    contactText: string;
    contactLink: string;
  }
  html: string;
}

export interface AboutSectionQueryResult {
  frontmatter: {
    title: string;
    skills: string[];
    avatar: ChildImageSharpResult;
  }
  html: string;
}

export interface JobSectionQueryResult {
  frontmatter: {
    role: string;
    company: string;
    period: string;
    url: string;
    key: string;
  }
  html: string;
}

export interface ChildImageSharpResult {
  childImageSharp: {
    fluid: {
      aspectRatio: number;
      sizes: string;
      src: string;
      srcSet: string;
      srcSetWebp: string;
      srcWebp: string;
      tracedSVG: string;
    }
  }
}

export const query = graphql`
  query IndexQuery {
    hero: allMarkdownRemark(filter: { fileAbsolutePath: { regex: "/hero/" } }) {
      edges {
        node {
          html
          frontmatter {
            title
            name
            subtitle
            contactText
            contactLink
          }
        }
      }
    }
    about: allMarkdownRemark(filter: { fileAbsolutePath: { regex: "/about/" } }) {
      edges {
        node {
          html
          frontmatter {
            title
            avatar {
              childImageSharp {
                fluid(maxWidth: 700, quality: 90, traceSVG: { color: "#64ffda" }) {
                  ...GatsbyImageSharpFluid_withWebp_tracedSVG
                }
              }
            }
            skills
          }
        }
      }
    }
    jobs: allMarkdownRemark(
      filter: { fileAbsolutePath: { regex: "/jobs/" } }
      sort: { fields: [frontmatter___key], order: DESC }
    ) {
      edges {
        node {
          frontmatter {
            role
            company
            period
            url
            key
          }
          html
        }
      }
    }
  }
`;
