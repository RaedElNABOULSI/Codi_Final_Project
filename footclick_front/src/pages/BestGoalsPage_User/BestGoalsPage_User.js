import React, { Component } from "react";
//------------------------ @start import components ----------------------------------------------------------------
import NavBar from "../../components/NavBar/NavBar";
import Footer from "../../components/Footer/Footer";
//------------------------ @end import components ------------------------------------------------------------------

//------------------------ @start import scss link ----------------------------------------------------------------------------
import "../BestGoalsPage_User/BestGoalsPage_User.scss";
//--------------------------@end import scss link----------------------------------------------------------------------------------------
class BestGoalsPage_User extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <div className="BestGoalsPage_User">
        <NavBar />
        <div className="BestGoalsPage_User_Content">
          <h1>Discover our Highlights</h1>
          <hr className="Horizontal_Line" />
          {/* --------------------------@start grid container--------------------------------------------- */}
          <div className="BestGoalsPage_User_Content_Videos">
            {/* --------------------------@start grid child--------------------------------------------- */}
            <div className="BestGoalsPage_User_Content_Videos_Elements">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe
                  class="embed-responsive-item"
                  src="https://www.youtube.com/embed/v64KOxKVLVg"
                ></iframe>
              </div>
            </div>
            {/* --------------------------@end grid child--------------------------------------------- */}
          </div>
          {/* --------------------------@end grid container--------------------------------------------- */}
        </div>
        <div className="Footer_BestGoalsPage_User">
          <Footer />
        </div>
      </div>
    );
  }
}

export default BestGoalsPage_User;
