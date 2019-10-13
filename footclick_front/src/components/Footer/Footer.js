import React, { Component } from "react";

//------------------------ scss link ----------------------------------------------------------------------------
import "../Footer/Footer.scss";
//-----------------------------------------------------------------------------------------------------------------

class Footer extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <div className="Footer">
        <h1>Follow us on</h1>
        <div class="SocialMedia">
          <i class="fab fa-facebook-square"></i>

          <i class="fab fa-instagram"></i>
        </div>
        <div>
          <p>Privacy Policy &nbsp; @Copyrights Reserved</p>
        </div>
      </div>
    );
  }
}

export default Footer;
