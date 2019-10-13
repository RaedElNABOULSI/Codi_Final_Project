import React, { Component } from "react";
//------------------------ @start import images ------------------------------------------------------------------------
import Teammate from "../../assets/images/teammate.svg";
import Stadium from "../../assets/images/stadium.svg";
import Reservation from "../../assets/images/reservation.svg";
//------------------------ @end import images------------------------------------------------------------------------

//------------------------ @start import scss link ------------------------------------------------------------------------
import "../Services/Services.scss";
//-------------------------@end import scss link ------------------------------------------------------------

class Services extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <div className="Services">
        <h2>Services</h2>
        <br />
        <hr className="Horizontal_Line" />
        {/* ------------------------ @start Services Grid---------------------------------------------------------------- */}
        <div className="Parent_Grid">
          {/* ------------------------ @start mapping of Services ---------------------------------------------- */}

          {/* ------------------------ @start Service 1 ---------------------------------------------- */}
          <div className="Child_Grid">
            <div className="ServiceOne">
              <img src={Teammate} alt="error" />
              <h3>Find your Teammates</h3>
            </div>
            <div>
              <i className="fas fa-arrow-right"></i>
            </div>
          </div>
          {/* ------------------------ @end Service 1 ---------------------------------------------- */}
          <div className="Child_Grid">
            <div className="ServiceTwo">
              <img src={Stadium} alt="error" />
              <h3>Choose your Stadium</h3>
            </div>
            <div>
              <i className="fas fa-arrow-right"></i>
            </div>
          </div>
          <div className="Child_Grid">
            <div className="ServiceThree">
              <img src={Reservation} alt="error" />
              <h3>Reserve</h3>
            </div>
            {/* <div>
              <i className="fas fa-arrow-right"></i>
            </div> */}
          </div>
          {/* ------------------------ @end mapping of Services ---------------------------------------------- */}
        </div>
        {/* ------------------------ @end Services Grid------------------------------------------------------ */}
      </div>
    );
  }
}

export default Services;
