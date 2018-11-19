import * as React from 'react'
import Header from '../components/Header';
import Footer from '../components/Footer';
import SocialFeature from '../components/SocialFeature';
import EmailFeature from '../components/EmailFeature';

export default class IndexPage extends React.Component<{}, {}> {
  public render() {
    return (
      <div>
        <Header />

        <Footer />
        <SocialFeature />
        <EmailFeature />
      </div>
    )
  }
}
