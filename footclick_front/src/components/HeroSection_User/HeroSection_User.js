import React, { Component } from "react";
import { Link } from "react-router-dom";
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
        {/* ------------------------@start HERO CONTENT ------------------------------------------------- */}
        <div className="Hero_Content">
          <h1>Live, Love, Enjoy Football</h1>
          <p>play from a click</p>
          {/* ------------------------@start BUTTONS ------------------------------------------------- */}
          <div className="Buttons">
            <Link to="/register">
              <Button className="Button" color="success">
                Register
              </Button>{" "}
            </Link>
            <Link to="/login">
              <Button className="Button" color="success">
                Log In
              </Button>{" "}
            </Link>
          </div>
          {/* ------------------------@end BUTTONS ------------------------------------------------- */}
        </div>
        {/* ------------------------@end HERO CONTENT ------------------------------------------------- */}
      </div>
    );
  }
}

export default HeroSection_User;
