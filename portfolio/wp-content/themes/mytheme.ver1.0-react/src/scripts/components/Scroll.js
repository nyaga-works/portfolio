import React from 'react';

class Drawer extends React.Component {
  constructor(props) {
    super(props);
  }
  
  handleClick(name){
    this.setState({name:name});
  }
  
  render() {
    return (
    	<div classname="contents">
    	  <h1>こんにちは、{this.state.name}さん！</h1>
        <button onClick={() => {this.handleClick('ひつじ仙人')}}>ひつじ仙人</button>
        <button onClick={() => {this.handleClick('にんじゃわんこ')}}>にんじゃわんこ</button>
      </div>
    );
  }
}


type Props = {
  scroll: number;
};

const component: React.SFC<Props> = (props: Props) => {
  return (
      <div>
          Scroll: {props.scroll.toString()}
      </div>
  );
};

export default Drawer;
