import React, { Component } from "react";
import axios from "axios";
import map from "../../assets/images/map-contact-page.png";
//------------------------ @start import components ----------------------------------------------------------------
import NavbarPlayer from "../../components/NavbarPlayer/NavbarPlayer";
import Footer from "../../components/Footer/Footer";
//------------------------ @end import components ----------------------------------------------------------------

//------------------------ @start import scss link -------------------------------------------------------------------------
import "../ContactPage_Player/ContactPage_Player.scss";
import "../../components/NavbarPlayer/NavbarPlayer.scss";
//------------------------ @end import scss link---------------------------------------------------------------------------

class ContactPage_Player extends Component {
  constructor(props) {
    super(props);
    this.state = { name: "", email: "", subject: "", message: "" };
  }
  //------------------------ @start handleSubmit EMAIL-----------------------------------------
  handleSubmit = e => {
    e.preventDefault();
    console.log("this is state before fetching api");
    console.log(this.state);
    axios
      .get("http://127.0.0.1:8000/api/send/email")
      .then(res => {
        console.log("this is the response", res);
      })
      .catch(error => {
        console.error(error);
      });
  };
  //------------------------ @end handleSubmit EMAIL------------------------------------------

  //------------------------ @start handleChange EMAIL------------------------------------------
  handleChange = e => {
    this.setState({ [e.target.name]: e.target.value });
  };
  //------------------------ @end  handleChange EMAIL------------------------------------------

  //------------------------ @start passEmail Email message-----------------------------------------
  // write here to PASS email message through api
  //------------------------ @end passEmail Email message-----------------------------------------
  render() {
    return (
      <div className="ContactPage_Player">
        <NavbarPlayer />
        {/* ------------------------ @start ContactContent ----------------------------------------------------------- */}
        <div className="ContactContent">
          {/* ------------------------ @start grid 1 ----------------------------------------------------------- */}
          <div className="Map">
            <img src={map} />
          </div>
          {/* ------------------------ @end grid 1 ----------------------------------------------------------- */}

          {/* ------------------------ @start grid2 ----------------------------------------------------------- */}
          <div className="ContactForm">
            <div class="shade">
              <div class="blackboard">
                <div class="form">
                  <form onSubmit={this.handleSubmit} name="contactMessage">
                    <p>
                      <label>Name: </label>
                      <input
                        onChange={this.handleChange}
                        type="text"
                        name="name"
                        placeholder="Enter your Name..."
                        required
                      />
                    </p>
                    <p>
                      <label>Email: </label>
                      <input
                        onChange={this.handleChange}
                        type="text"
                        name="email"
                        placeholder="Enter your Email..."
                        required
                      />
                    </p>
                    <p>
                      <label>Phone: </label>
                      <input
                        type="tel"
                        placeholder="Enter your Phone Number.."
                      />
                    </p>
                    <p>
                      <label>Subject: </label>
                      <input
                        onChange={this.handleChange}
                        type="text"
                        name="subject"
                        placeholder="Enter the Subject..."
                        required
                      />
                    </p>
                    <p>
                      <label>Message: </label>
                      <textarea
                        onChange={this.handleChange}
                        name="message"
                        placeholder="Your message ..."
                      ></textarea>
                    </p>
                    <p class="wipeout">
                      <input type="submit" value="Send" />
                    </p>
                  </form>
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

export default ContactPage_Player;
