import * as React from 'react'
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

export default class IndexPage extends React.Component<{}, {}> {
  public render() {
    return (
      <div>
        <Header />
        <main className={styles.Main}>
          <Hero />
          <About />
          <Jobs />
          <Projects />
          <Contact />
        </main>
        <Footer />
        <SocialFeature />
        <EmailFeature />
      </div>
    )
  }
}
