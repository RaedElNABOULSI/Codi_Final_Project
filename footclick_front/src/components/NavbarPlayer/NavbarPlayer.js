import React, { Component } from "react";
import { Link } from "react-router-dom";
import {
  MDBDropdown,
  MDBDropdownToggle,
  MDBDropdownMenu,
  MDBDropdownItem
} from "mdbreact";

//----------------------- @start scss link ----------------------------------------------------------------------------

import "../NavbarPlayer/NavbarPlayer.scss";

//----------------------- @end scss link ---------------------------------------------------------------------------------

class NavbarPlayer extends Component {
  constructor(props) {
    super(props);
    this.state = { dataUser: [] };
  }

  render() {
    // console.log("STATE in didMount in navbarplayer IS", this.state);
    return (
      <div className="NavbarPlayer">
        {/* ------------------------------------@start Header Logo ------------------------------------------------ */}

        <Link to="/landing_player" className="Logo">
          <img src="https://www.freelogoservices.com/api/main/images/1j+ojVVCOMkX9Wyrexe4hGff8Ynk32s262XbizxmfGwQoQJqlSEuh...Jv...Pgtb0NZoBRejhUKdcY6jyx4UIID3UQ6oXbQZs4AVn8=" />
        </Link>
        {/* ------------------------------------@end Header Logo ------------------------------------------------ */}

        <input type="checkbox" id="chk" />
        <label for="chk" className="show-menu-btn">
          <i className="fas fa-ellipsis-h"></i>
        </label>
        {/* ------------------------------------@start Navbar links------------------------------------------------ */}
        <ul className="Navbar">
          <Link to="/landing_player/stadiums" className="Navbar_Link">
            Stadiums
          </Link>
          <Link to="/landing_player/bestgoals" className="Navbar_Link">
            Best Goals
          </Link>
          <Link to="/landing_player/about" className="Navbar_Link">
            About
          </Link>
          <Link to="/landing_player/contact" className="Navbar_Link">
            Contact
          </Link>
          {/* ------------------------------------@end Navbar links ------------------------------------------------ */}
          <div className="Navbar">
            <MDBDropdown>
              <MDBDropdownToggle caret color="primary">
                {/* {this.props.user.currentUser.footclick_name} */}{" "}
                {localStorage.getItem("footclickName")}
              </MDBDropdownToggle>
              <MDBDropdownMenu basic>
                <MDBDropdownItem>
                  {" "}
                  <Link to="/" className="Navbar_LogOut">
                    Log Out
                  </Link>
                </MDBDropdownItem>
              </MDBDropdownMenu>
            </MDBDropdown>
          </div>
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

export default NavbarPlayer;
