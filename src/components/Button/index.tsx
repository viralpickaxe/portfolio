import * as React from 'react'
import styles from './Button.module.scss'

export interface ButtonProps {
  className?: string;
  href: string;
}

export default class Button extends React.Component<ButtonProps, {}> {
  public render() {
    const className = this.props.className ?
      [styles.Button, this.props.className].join(' ') : styles.Button;

    return <a className={className} href={this.props.href}>{this.props.children}</a>;
  }
}
