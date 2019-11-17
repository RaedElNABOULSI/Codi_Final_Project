import React, { Component } from "react";
import { Link } from "react-router-dom";
import { Button } from "reactstrap";

//------------------------ scss link ----------------------------------------------------------------------------
import "../HeroSection_Player/HeroSection_Player.scss";
//------------------------------------------------------------------------------------------------------------------

class HeroSection_Player extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <div className="HeroSection_Player">
        {/* ------------------------@start HERO CONTENT ------------------------------------------------- */}
        <div className="Hero_Content">
          <h1>Live, Love, Enjoy Football</h1>
          <p>play from a click</p>
          {/* ------------------------@start BUTTONS ------------------------------------------------- */}
          <div className="Buttons">
            <Link to="/landing_player/playersPage">
              <Button className="Button" color="success">
                Go to Lobby
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

export default HeroSection_Player;
