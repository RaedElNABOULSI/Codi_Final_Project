import React, { Component } from "react";

//------------------------ @start import components ------------------------------------------------------------------
import NavBar from "../../components/NavBar/NavBar";
import HeroSection_User from "../../components/HeroSection_User/HeroSection_User";
import Testimonial from "../../components/Testimonial/Testimonial";
import Services from "../../components/Services/Services";
import Footer from "../../components/Footer/Footer";
//------------------------ @end import components --------------------------------------------------------------------

//------------------------ @start import scss link --------------------------------------------------------
import "../LandingPage_Player/LandingPage_Player.scss";
//-------------------------- @end import scss link--------------------------------------------------------
class LandingPage_Player extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <div className="LandingPage_Player">
        <NavBar />
        <HeroSection_User />
        <Testimonial />
        <Services />
        <Footer />
      </div>
    );
  }
}

export default LandingPage_Player;
