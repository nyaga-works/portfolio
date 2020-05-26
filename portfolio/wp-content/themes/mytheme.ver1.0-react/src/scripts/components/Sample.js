import React from 'react';

function HelloMessage(props) {
  return <h1>Hello, {props.name}</h1>;
}

function HelloMessageList(props) {
  var list = props.names.map(function (name) {
    return <HelloMessage name={name} />;
  });

  return <div>{list}</div>;
}

class HelloWorldApp extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      name: '',
      names: [],
    };

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(event) {
    this.setState({ name: event.target.value });
  }

  handleSubmit(event) {
    event.preventDefault();

    this.setState({
      name: '',
      names: this.state.names.concat([this.state.name]),
    });
  }

  render() {
    return (
      <div>
        <HelloMessage name={this.state.name} />
        <form onSubmit={this.handleSubmit}>
          <input
            type="text"
            placeholder="Your name"
            value={this.state.name}
            onChange={this.handleChange}
          />
        </form>
        <HelloMessageList names={this.state.names} />
      </div>
    );
  }
}

export default HelloWorldApp;