import React, { Component } from "react";

//------------------------ @start import components ----------------------------------------------------------------------------------
import NavBar from "../../components/NavBar/NavBar";
import HeroSection_User from "../../components/HeroSection_User/HeroSection_User";
import Testimonial from "../../components/Testimonial/Testimonial";
import Services from "../../components/Services/Services";
import Footer from "../../components/Footer/Footer";
//------------------------ @end import components ---------------------------------------------------------------------

//------------------------ @start scss link ----------------------------------------------------------------------------------
import "../LandingPage_User/LandingPage_User.scss";
//------------------------ @end scss link-------------------------------------------------------------------------------------

class LandingPage_User extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <div className="LandingPage_User">
        <NavBar />
        <HeroSection_User />
        <Testimonial />
        <Services />
        <Footer />
      </div>
    );
  }
}

export default LandingPage_User;
