import React, { Component } from "react";
import axios, { post } from "axios";
import { Tab, Tabs, TabList, TabPanel } from "react-tabs";
import {
  MDBJumbotron,
  MDBBtn,
  MDBContainer,
  MDBRow,
  MDBCol,
  MDBInput
} from "mdbreact";

//------------------------@start import scss link -------------------------------
import "../PlayersPage/PlayersPage.scss";
import "react-tabs/style/react-tabs.css";
//--------------------------@end import scss link-------------------------------

//------------------------ @start import components ----------------------------------------------------------------
import NavbarPlayer from "../../components/NavbarPlayer/NavbarPlayer";
import Footer from "../../components/Footer/Footer";
//------------------------ @end import components ------------------------------------------------------------------

class PlayersPage extends Component {
  constructor(props) {
    super(props);
    this.state = {
      userInfo: [],
      positions: [],
      locations: [],
      playerCapacitySelected: [],
      minAgeInput: [],
      maxAgeInput: [],
      positionSelected: [],
      locationSelected: [],
      teamNameInput: [],
      toggleInvite: false
    };
  }

  //---------- @start Fetching USER INFO ------------
  componentDidMount() {
    axios.get("http://127.0.0.1:8000/api/user").then(res => {
      console.log("this is the response of the USER INFO api");
      console.log(res.data);
      this.setState({ userInfo: res.data });
    });
    //------- @end Fetching USER INFO -----------------
    //------- @start Fetching POSITIONS ---------------
    axios.get("http://127.0.0.1:8000/api/position").then(res => {
      console.log("this is the response of the POSITION api");
      console.log(res.data);
      this.setState({ positions: res.data });
    });
    //---- @end Fetching POSITIONS ----------------------------
    //---- @start Fetching LOCATIONS ----------------------------
    axios.get("http://127.0.0.1:8000/api/location").then(res => {
      console.log("this is the response of the LOCATION api");
      console.log(res.data);
      this.setState({ locations: res.data });
    });
    //----- @end Fetching LOCATIONS ----------------------------
  }

  handleChange = e => {
    this.setState({ [e.target.name]: e.target.value }, () => {
      console.log("State in handle Change ");
      console.log(this.state);
    });
  };

  handleSubmit = e => {
    e.preventDefault();
    //------- @start Fetching Filtered players and rendering 'INVITE' button--------
    axios
      .get("http://127.0.0.1:8000/api/filterPlayers", {
        params: {
          ageMin_param: this.state.minAgeInput,
          ageMax_param: this.state.maxAgeInput,
          position_param: this.state.positionSelected,
          location_param: this.state.locationSelected
        }
      })
      .then(res => {
        console.log(
          "This is the response (res.data) in fetching FILTERED players"
        );
        console.log(res.data);
        this.setState({
          userInfo: res.data,
          toggleInvite: !this.state.toggleInvite
        });
      })
      .catch(function(error) {
        console.log(error);
      })
      .finally(function() {
        // always executed
      });
    //-------- @end Fetching Filtered players and rendering 'INVITE' button--------------
  };

  render() {
    return (
      <div className="PlayersPage">
        <NavbarPlayer />

        {/* ------------------------ @start PlayersPage content---------------- */}
        <div className="PlayersPage_Content">
          {/* //------------------------ @start TAB----------------------------------------------- */}
          <div class="tab">
            <Tabs>
              <TabList className="TabList">
                <Tab>Players</Tab>
                <Tab>Join a Team</Tab>
                <Tab>Host a Team</Tab>
                <Tab>Match Challenge</Tab>
              </TabList>
              {/* ----@start PLAYERS panel ----------------------------------------- */}
              <TabPanel>
                {this.state.userInfo.map(item => (
                  <div className="TabPanelPlayers">
                    {/* <div className="playerImage"> */}
                    <img
                      src="https://images.all-free-download.com/images/graphiclarge/football_player_289.jpg"
                      alt="error"
                    />
                    {/* </div> */}
                    <ul>
                      <li>
                        <strong>Footclick Name:</strong> {item.footclick_name}
                      </li>
                      <li>
                        <strong>Position:</strong> {item.position}
                      </li>
                      <li>
                        <strong>Foot:</strong> {item.foot}
                      </li>
                      <li>
                        <strong>Age:</strong> {item.age}
                      </li>
                      <li>
                        <strong>Height:</strong> {item.height}
                      </li>
                      <li>
                        <strong>Location:</strong> {item.location}
                      </li>
                      <li>
                        <strong>Specialties / Traits:</strong> {item.trait}
                      </li>
                    </ul>
                    {this.state.toggleInvite && (
                      <p className="lead">
                        <MDBBtn color="primary">Invite</MDBBtn>
                      </p>
                    )}
                  </div>
                ))}
              </TabPanel>
              {/* ----@end PLAYERS panel ----------------------------------------- */}
              <TabPanel>
                <h2>Any content 2</h2>
              </TabPanel>

              {/* ----@start HOST panel ----------------------------------------- */}
              <TabPanel>
                <MDBContainer className="mt-5 text-center">
                  <MDBRow>
                    <MDBCol>
                      <MDBJumbotron>
                        <h3 className="h1 display-3">Host Setup</h3>
                        <form onSubmit={this.handleSubmit}>
                          <select
                            className="browser-default custom-select"
                            name="playerCapacitySelected"
                            onChange={this.handleChange}
                            required
                          >
                            <option value="">Number of Players Needed</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                          <MDBInput
                            label="Minimum Age"
                            type="number"
                            name="minAgeInput"
                            onChange={this.handleChange}
                            required
                          />
                          <MDBInput
                            label="Maximum Age"
                            type="number"
                            name="maxAgeInput"
                            onChange={this.handleChange}
                            min={parseInt(this.state.minAgeInput)}
                            required
                          />
                          {/* ----@start select preferred PLAYER POSITION ----------------------------------------- */}
                          <select
                            className="browser-default custom-select"
                            name="positionSelected"
                            onChange={this.handleChange}
                            required
                          >
                            <option value="">Preferred Position</option>
                            <option value="Any">Any</option>
                            {this.state.positions.map(item => (
                              <option value={item.position}>
                                {item.position}
                              </option>
                            ))}
                          </select>
                          {/* ----@end select preferred PLAYER POSITION ----------------------------------------- */}
                          {/* ----@start select preferred PLAYER LOCATION ----------------------------------------- */}
                          <select
                            className="browser-default custom-select"
                            name="locationSelected"
                            id="preferredLocation"
                            onChange={this.handleChange}
                            required
                          >
                            <option value="">Preferred Location</option>
                            {this.state.locations.map(item => (
                              <option value={item.location}>
                                {item.location}
                              </option>
                            ))}
                          </select>
                          {/* ----@end select preferred PLAYER LOCATION ----------------------------------------- */}
                          <MDBInput
                            label="Team Name"
                            name="teamNameInput"
                            onChange={this.handleChange}
                            required
                          />
                          <p className="lead">
                            <MDBBtn color="primary" type="Submit">
                              Submit
                            </MDBBtn>
                          </p>
                        </form>

                        {/* <hr className="my-2" /> */}
                      </MDBJumbotron>
                    </MDBCol>
                  </MDBRow>
                </MDBContainer>
              </TabPanel>
              {/* ----@end HOST panel ----------------------------------------- */}

              <TabPanel>
                <h2>challenge</h2>
              </TabPanel>
            </Tabs>
          </div>
          {/* //------------------------ @end TAB----------------------------------------------- */}
        </div>
        {/* //------------------------ @end PlayersPage content---------------- */}

        {/* //------------------------ @start Footer---------------- */}
        <div>
          <Footer />
        </div>
        {/* //------------------------ @end Footer---------------- */}
      </div>
    );
  }
}

export default PlayersPage;
