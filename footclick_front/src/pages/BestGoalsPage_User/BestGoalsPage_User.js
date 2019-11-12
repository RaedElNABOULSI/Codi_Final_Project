import React, { Component } from "react";
import axios from "axios";
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
    this.state = { data: [] };
  }

  //------------------------ @start Fetching goal footage-------------------------------------------------------
  componentDidMount() {
    axios.get("http://127.0.0.1:8000/api/bestgoal").then(res => {
      console.log(res.data);
      this.setState({ data: res.data });
    });
  }
  //------------------------ @end Fetching goal gootage -----------------------------------------------------------

  render() {
    return (
      <div className="BestGoalsPage_User">
        <NavBar />
        <div className="BestGoalsPage_User_Content">
          <h1>Discover our Highlights</h1>
          <hr className="Horizontal_Line" />
          {/* --------------------------@start grid container--------------------------------------------- */}
          <div className="Parent_Grid">
            {/* ------------------------ @start mapping of goal footages ---------------------------------------------- */}
            {this.state.data.map(item => (
              <div className="Child_Grid">
                <img
                  src={`http://127.0.0.1:8000/images/${item.image}`}
                  alt="error"
                />
                {/* <h3>{item.name}</h3> */}
                <p>
                  <strong>Scored by: </strong> {item.footclick_name}
                </p>
              </div>
            ))}
            {/* ------------------------ @end mapping of goal footages ---------------------------------------------- */}
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
