import React, { Component } from "react";
import ReactDOM from "react-dom";
import axios from "axios";
import map from "../../assets/images/map-contact-page.png";
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
    this.state = { name: "", email: "", subject: "", message: "" };
  }
  //------------------------ @start handleSubmit EMAIL-----------------------------------------
  handleSubmit = e => {
    e.preventDefault();
    console.log("this is state before fetching api", this.state);
    axios
      .post("http://127.0.0.1:8000/api/send/email", {
        senderName: this.state.name,
        email: this.state.email,
        subject: this.state.subject,
        message: this.state.message
      })
      .then(res => {
        console.log("Response from the server: ", res.data);
        ReactDOM.render(
          <p>{res.data.message}</p>,
          document.getElementById("confirmation-message")
        );
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
      <div className="ContactPage">
        <NavBar />
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
                    <p className="wipeout">
                      <input type="submit" value="Send" />
                    </p>
                  </form>
                </div>
              </div>
            </div>
            <div id="confirmation-message"></div>
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
