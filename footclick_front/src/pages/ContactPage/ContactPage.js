import React, { Component } from "react";

//------------------------ @start import components ----------------------------------------------------------------
import NavBar from "../../components/NavBar/NavBar";
import Footer from "../../components/Footer/Footer";
//------------------------ @end import components ----------------------------------------------------------------

//------------------------ @start import scss link -------------------------------------------------------------------------
import "../ContactPage/ContactPage.scss";
//------------------------ @end import scss link----------------------------------------------------------------------------
class ContactPage extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <div className="ContactPage">
        <NavBar />
        {/* ------------------------ @start ContactContent ----------------------------------------------------------- */}
        <div className="ContactContent">
          {/* ------------------------ @start grid 1 ----------------------------------------------------------- */}
          <div className="Map">
            <img src="https://raw.githubusercontent.com/xuopled/react-google-map/HEAD/screenshots/react-google-map-exemple.png" />
          </div>
          {/* ------------------------ @end grid 1 ----------------------------------------------------------- */}

          {/* ------------------------ @start grid2 ----------------------------------------------------------- */}
          <div className="ContactForm">
            <div class="shade">
              <div class="blackboard">
                <div class="form">
                  <p>
                    <label>Name: </label>
                    <input type="text" />
                  </p>
                  <p>
                    <label>Email: </label>
                    <input type="text" />
                  </p>
                  <p>
                    <label>Phone: </label>
                    <input type="tel" />
                  </p>
                  <p>
                    <label>Subject: </label>
                    <input type="text" />
                  </p>
                  <p>
                    <label>Message: </label>
                    <textarea></textarea>
                  </p>
                  <p class="wipeout">
                    <input type="submit" value="Send" />
                  </p>
                </div>
              </div>
            </div>

            {/* ------------------------ @end grid 2 ----------------------------------------------------------- */}
          </div>
          {/* ------------------------ @end ContactContent ---------------------------------------------------------------- */}
        </div>
        <div className="Footer_Contact">
          <Footer />
        </div>
      </div>
    );
  }
}

export default ContactPage;
