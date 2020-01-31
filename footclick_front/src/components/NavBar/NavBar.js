import React, { Component } from "react";
import { Link } from "react-router-dom";
import LogoHeader from "../../assets/images/logo-header.Pgtb0NZoBRejhUKdcY6jyx4UIID3UQ6oXbQZs4AVn8=";
// import scss link
import "../NavBar/NavBar.scss";

class NavBar extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <div className="Header">
        <Link to="/" className="Logo">
          <img src={LogoHeader} />
        </Link>
        <input type="checkbox" id="chk" />
        <label for="chk" className="show-menu-btn">
          <i className="fas fa-ellipsis-h"></i>
        </label>
        {/* ------------------------------------@start Navbar links------------------------------------------------ */}
        <ul className="Navbar">
          <Link to="/stadiums" className="Navbar_Link">
            Stadiums
          </Link>
          <Link to="/bestgoals" className="Navbar_Link">
            Best Goals
          </Link>
          <Link to="/about" className="Navbar_Link">
            About
          </Link>
          <Link to="/contactus" className="Navbar_Link">
            Contact
          </Link>
          {/* ------------------------------------@end Navbar links ------------------------------------------------ */}

          {/* ------------------------------------@start fontawesome icon ------------------------------------------------ */}
          <label for="chk" className="hide-menu-btn">
            <i className="fas fa-times"></i>
          </label>
          {/* ------------------------------------@end fontawesome icon ------------------------------------------------ */}
        </ul>
      </div>
    );
  }
}

export default NavBar;
