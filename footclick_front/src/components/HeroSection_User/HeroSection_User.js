import React, { Component } from "react";
import ReactDOM from "react-dom";
import { Button } from "reactstrap";
//------------------------@start import scss link ------------------------------------------------------------------------
import "../HeroSection_User/HeroSection_User.scss";
//------------------------@end import scss link ------------------------------------------------------------------------------------------

class HeroSection_User extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <div className="HeroSection_User">
        <div className="Hero_Content">
          <h1>Live, Love, Enjoy Football</h1>
          <p>play from a click</p>
          <Button className="Button" color="success">
            CREATE YOUR PLAYER PROFILE
          </Button>{" "}
        </div>
      </div>
    );
  }
}

export default HeroSection_User;
