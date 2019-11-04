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
      data: []
    };
  }

  //------------------------ @start Fetching User info ----------------------------
  componentDidMount() {
    axios.get("http://127.0.0.1:8000/api/user").then(res => {
      console.log("this is the response of the user api");
      console.log(res.data);
      this.setState({ data: res.data });
    });
  }
  //------------------------ @end Fetching user info -------------------------------

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
                {this.state.data.map(item => (
                  <div className="TabPanelPlayers">
                    <img
                      src="https://images.all-free-download.com/images/graphiclarge/football_player_289.jpg"
                      alt="error"
                    />

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
                        <form>
                          <select
                            className="browser-default custom-select"
                            name="playerCapacitySelected"
                          >
                            <option value="default" selected="selected">
                              Number of Players Needed
                            </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                          <MDBInput label="Minimum Age" type="number" />
                          <MDBInput label="Maximum Age" type="number" />
                          <select
                            className="browser-default custom-select"
                            name="positionSelected"
                          >
                            <option value="default" selected="selected">
                              Preferred Position
                            </option>
                            <option value="Goalkeeper">Goalkeeper</option>
                            <option value="Defender">Defender</option>
                            <option value="Midfielder">Midfielder</option>
                            <option value="Attacker">Attacker</option>
                          </select>
                          <MDBInput label="Team Name" />
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
