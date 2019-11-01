import React, { Component } from "react";

//------------------------ @start import components ----------------------------------------------------------------
import NavbarPlayer from "../../components/NavbarPlayer/NavbarPlayer";
import Footer from "../../components/Footer/Footer";
//------------------------ @end import components ----------------------------------------------------------------

//------------------------@start import scss link -------------------------------------------------------------------------
import "../AboutPage_Player/AboutPage_Player.scss";
//------------------------@end import scss link  -------------------------------------------------------------------------

class AboutPage_Player extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <div className="AboutPage_Player">
        <div className="Navbar">
          <NavbarPlayer />
        </div>
        <div className="Mission">
          <h1>- Our Mission -</h1>
          <p>To provide a network of Footballers</p>
        </div>
        <div className="About">
          <h2>About</h2>
          <p>
            Quis ad tempor laboris adipisicing voluptate sit do enim dolore esse
            est non dolore. Nostrud ex elit ut do incididunt est anim aliqua.
            Est nisi minim ea ad minim adipisicing veniam Lorem non elit
            proident. Velit ullamco duis nulla aliquip sunt enim consequat. Non
            duis aliqua ipsum pariatur dolore sit officia reprehenderit dolore.
            Dolor eu velit occaecat anim in occaecat fugiat Lorem nulla sit
            cillum laborum esse sunt.Eu anim proident ex consequat anim ut
            adipisicing nostrud dolor est quis minim laboris consequat. Eu
            aliqua esse elit excepteur tempor esse id sint labore nulla eu
            occaecat veniam non. Enim ullamco ad ad consectetur enim ad laborum
            velit laboris ullamco. Commodo enim esse officia sit elit
            exercitation sunt dolor dolore cupidatat pariatur. Commodo labore
            pariatur laborum commodo.
          </p>
        </div>
        <div className="Footer_About">
          <Footer />
        </div>
      </div>
    );
  }
}

export default AboutPage_Player;
