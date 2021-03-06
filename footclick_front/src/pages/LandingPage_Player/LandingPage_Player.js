import React, { Component } from "react";
import { Redirect } from "react-router-dom";
//------------------------ @start import components ------------------------------------------------------------------
import NavBarPlayer from "../../components/NavbarPlayer/NavbarPlayer";
import HeroSection_Player from "../../components/HeroSection_Player/HeroSection_Player";
import Testimonial from "../../components/Testimonial/Testimonial";
import Services from "../../components/Services/Services";
import Footer from "../../components/Footer/Footer";
//------------------------ @end import components --------------------------------------------------------------------

//------------------------ @start import scss link --------------------------------------------------------
import "../LandingPage_Player/LandingPage_Player.scss";
import { exact } from "prop-types";
//-------------------------- @end import scss link--------------------------------------------------------
class LandingPage_Player extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <div className="LandingPage_Player">
        <NavBarPlayer user={this.props.user} />
        <HeroSection_Player />
        <Testimonial />
        <Services />
        <Footer />
      </div>
    );
  }
}

export default LandingPage_Player;
