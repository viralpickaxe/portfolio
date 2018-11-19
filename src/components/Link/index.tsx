import * as React from 'react'
import styles from './Link.module.scss'

export interface LinkProps {
  className?: string;
  href: string;
}

export default class Link extends React.Component<LinkProps, {}> {
  public render() {
    const className = this.props.className ?
      [styles.Link, this.props.className].join(' ') : styles.Link;

    return <a className={className} href={this.props.href}>{this.props.children}</a>;
  }
}
