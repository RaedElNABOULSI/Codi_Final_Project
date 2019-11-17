import React, { Component } from "react";
import axios, { post } from "axios";
import { Tab, Tabs, TabList, TabPanel } from "react-tabs";
import {
  MDBJumbotron,
  MDBBtn,
  MDBContainer,
  MDBRow,
  MDBCol,
  MDBInput,
  MDBCard,
  MDBCardBody,
  MDBCardImage,
  MDBCardTitle,
  MDBCardText
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
      hostCdts: [],
      positions: [],
      locations: [],
      playerCapacitySelected: [],
      minAgeInput: [],
      maxAgeInput: [],
      positionSelected: [],
      locationSelected: [],
      teamNameInput: [],
      toggleInvite: false,
      toggleMatchChallenge: false
    };
  }

  componentDidMount() {
    //--- fetch user info----
    axios.get("http://127.0.0.1:8000/api/user").then(res => {
      this.setState({ userInfo: res.data });
    });
    //----fetch positions --------
    axios.get("http://127.0.0.1:8000/api/position").then(res => {
      this.setState({ positions: res.data });
    });
    //----fetch locations--------
    axios.get("http://127.0.0.1:8000/api/location").then(res => {
      this.setState({ locations: res.data });
    });
    axios.get("http://127.0.0.1:8000/api/position").then(res => {
      this.setState({ positions: res.data });
    });
    //----fetch HostTeam conditions--------
    axios.get("http://127.0.0.1:8000/api/hostteam").then(res => {
      console.log("HostTeam cdts api", res.data);
      this.setState({ hostCdts: res.data });
    });
    //----check if user is host--------
    axios
      .get("http://127.0.0.1:8000/api/checkhost", {
        params: {
          userId: localStorage.getItem("userId")
        }
      })
      .then(res => {
        console.log("CHECK HOST response is", res.data);
        this.setState({ toggleInvite: !this.state.toggleInvite });
      })
      .catch(function(error) {
        console.log("User is not a host", error);
      });
  }

  handleChange = e => {
    this.setState({ [e.target.name]: e.target.value }, () => {
      console.log("handleChange state", this.state);
    });
  };

  handleSubmit = e => {
    e.preventDefault();
    //-------fetch filtered players -----
    axios
      .get("http://127.0.0.1:8000/api/filterPlayers", {
        params: {
          ageMin_param: this.state.minAgeInput,
          ageMax_param: this.state.maxAgeInput,
          positionId_param: this.state.positionSelected,
          locationId_param: this.state.locationSelected
        }
      })
      .then(res => {
        console.log("FILTERED RESPONSE IS", res.data);
        // render invite button
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
    //-- post Host team api ---
    axios
      .post("http://127.0.0.1:8000/api/hostteam", {
        playerCapacity: this.state.playerCapacitySelected,
        ageMin: this.state.minAgeInput,
        ageMax: this.state.maxAgeInput,
        positionId: this.state.positionSelected,
        locationId: this.state.locationSelected,
        teamName: this.state.teamNameInput,
        userName: localStorage.getItem("footclickName")
      })
      .then(res => {
        console.log("response in POST hostTeam", res.data);
      })
      .catch(function(error) {
        console.log(error);
      });
  };
  // shouldComponentUpdate(newState, preState) {
  //   if (newState.toggleInvite == true) {
  //     return false;
  //   } else {
  //     return true;
  //   }
  // }
  render() {
    return (
      <div className="PlayersPage">
        <NavbarPlayer />
        <div className="PlayersPage_Content">
          {/* //------------------------TAB----------------------------------------------- */}
          <div class="tab">
            <Tabs>
              <TabList className="TabList">
                <Tab>Players</Tab>
                <Tab>Join a Team</Tab>
                <Tab>Host a Team</Tab>
                <Tab>Match Challenge</Tab>
              </TabList>
              {/* ---'Players' panel ------------------------ */}
              <TabPanel>
                {this.state.userInfo.map(item => (
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
                    {this.state.toggleInvite && (
                      <p className="lead">
                        <MDBBtn color="primary">Invite</MDBBtn>
                      </p>
                    )}
                  </div>
                ))}
              </TabPanel>
              {/* 'Join a team' Panel */}
              <TabPanel>
                <div>
                  <MDBCol className="TabPanelJoin">
                    {this.state.hostCdts.map(item => (
                      <MDBCard style={{ width: "22rem" }}>
                        <MDBCardImage
                          className="img-fluid"
                          src="https://mccoyderek.files.wordpress.com/2016/07/team.jpg"
                          waves
                        />
                        <MDBCardBody>
                          <MDBCardTitle className="cardTitle">
                            {item.team_name}
                          </MDBCardTitle>
                          <MDBCardText>
                            <ul>
                              <li>
                                <strong>Host: </strong>
                                {item.footclick_name}
                              </li>
                              <li>
                                <strong>No. of Players Needed: </strong>{" "}
                                {item.no_of_players}
                              </li>
                              <li>
                                <strong>Preferred Location: </strong>{" "}
                                {item.location}
                              </li>
                              <li>
                                <strong>Preferred Position: </strong>{" "}
                                {item.position}
                              </li>
                            </ul>
                          </MDBCardText>
                          <MDBBtn href="#">Join Team</MDBBtn>
                        </MDBCardBody>
                      </MDBCard>
                    ))}
                  </MDBCol>
                </div>
              </TabPanel>
              {/* ---- HOST panel --------------- */}
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
                          {/* ---- select preferred 'Player Position' ------*/}
                          <select
                            className="browser-default custom-select"
                            name="positionSelected"
                            onChange={this.handleChange}
                            required
                          >
                            <option value="">Preferred Position</option>
                            {this.state.positions.map(item => (
                              <option value={item.id}>{item.position}</option>
                            ))}
                          </select>
                          {/* ---select preferred 'Player Location' ---- */}
                          <select
                            className="browser-default custom-select"
                            name="locationSelected"
                            id="preferredLocation"
                            onChange={this.handleChange}
                            required
                          >
                            <option value="">Preferred Location</option>
                            {this.state.locations.map(item => (
                              <option value={item.id}>{item.location}</option>
                            ))}
                          </select>
                          {/* ----'Team Name' input ------ */}
                          <MDBInput
                            label="Team Name"
                            name="teamNameInput"
                            onChange={this.handleChange}
                            required
                          />
                          {/* ----'Submit' button ------ */}
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
              {/* ---- 'Match Challenge' Panel --- */}
              <TabPanel>
                <div>
                  <MDBCol className="TabPanelChallenge">
                    {/* {this.state.hostCdts.map(item => ( */}
                    <MDBCard style={{ width: "22rem" }}>
                      <MDBCardImage
                        className="img-fluid"
                        src="https://i.ytimg.com/vi/5XNu-ohDiJs/maxresdefault.jpg"
                        waves
                      />
                      <MDBCardBody>
                        <MDBCardTitle className="cardTitle">
                          Team Name
                        </MDBCardTitle>
                        <MDBCardText>
                          <ul>
                            <li>
                              <strong>Host: </strong>
                              host name
                            </li>

                            <li>
                              <strong>Location: </strong> location y
                            </li>
                          </ul>
                        </MDBCardText>
                        <MDBBtn href="#">Challenge Team</MDBBtn>
                      </MDBCardBody>
                    </MDBCard>
                    {/* ))} */}
                  </MDBCol>
                </div>
              </TabPanel>
            </Tabs>
          </div>
        </div>
        {/* //---- Footer---------------- */}
        <div>
          <Footer />
        </div>
      </div>
    );
  }
}

export default PlayersPage;
