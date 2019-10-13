import React, { Component } from "react";
import { Link } from "react-router-dom";
//----------------------- @start scss link ----------------------------------------------------------------------------
import "../NavBar/NavBar.scss";
//----------------------- @end scss link ---------------------------------------------------------------------------------

//----------------------- @start font awesome link ----------------------------------------------------------------------------

//----------------------- @end font awesome link ---------------------------------------------------------------------------------
class NavBar extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <div className="Header">
        {/* ------------------------------------@start Header Logo ------------------------------------------------ */}

        <Link to="/" className="Logo">
          <img src="https://www.freelogoservices.com/api/main/images/1j+ojVVCOMkX9Wyrexe4hGff8Ynk32s262XbizxmfGwQoQJqlSEuh...Jv...Pgtb0NZoBRejhUKdcY6jyx4UIID3UQ6oXbQZs4AVn8=" />
          {/* <h2 className="Logo">FootClick</h2> */}
        </Link>
        {/* ------------------------------------@end Header Logo ------------------------------------------------ */}

        <input type="checkbox" id="chk" />
        <label for="chk" className="show-menu-btn">
          <i className="fas fa-ellipsis-h"></i>
        </label>
        {/* ------------------------------------@start Navbar links------------------------------------------------ */}
        <ul className="Navbar">
          <Link to="/blogpage" className="Navbar_Link">
            Stadiums
          </Link>
          <Link to="/eventpage" className="Navbar_Link">
            Best Goals
          </Link>
          <Link to="/gallerypage" className="Navbar_Link">
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
