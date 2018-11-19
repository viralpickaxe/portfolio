import * as React from 'react'
import styles from './Section.module.scss'

export interface SectionProps {
  id: string;
  title?: string;
  className?: string;
}

export default class Section extends React.Component<SectionProps, {}> {
  public render() {
    const className = this.props.className ?
      [styles.Section, this.props.className].join(' ') : styles.Section;

    return (
      <section className={className}>
        {this.props.title ? <h3>{this.props.title}</h3> : null}
        {this.props.children}
      </section>
    )
  }
}
