import React, { Component } from "react";
import axios from "axios";
import { FormGroup, Label, Input } from "reactstrap";

//------------------------@start import scss link ----------------------------------------------------------------------------
import "../SignUpPage/SignUpPage.scss";
//------------------------------------@end import scss link  ----------------------------------------------------------------------------

class SignUpPage extends Component {
  constructor(props) {
    super(props);
    this.state = {
      email: [],
      password: [],
      footclickName: [],
      age: [],
      footSelected: [],
      height: [],
      locationSelected: [],
      positionSelected: [],
      traitSelected: [],
      locations: [],
      traits: [],
      positions: []
    };
  }

  //------------------------ @start Fetching ----------------------------------------------------------------------------
  componentDidMount() {
    //------------------------ @start Locations fetching ------------------------------
    axios.get("http://127.0.0.1:8000/api/location").then(res => {
      console.log("response after fetching locations");
      console.log(res.data);
      this.setState({ locations: res.data });
    });
    //------------------------ @end Locations fetching -------------------------------

    //------------------------ @start Positions fetching ------------------------------
    axios.get("http://127.0.0.1:8000/api/position").then(res => {
      console.log("response after fetching position");
      console.log(res.data);
      this.setState({ positions: res.data });
    });
    //------------------------ @end Positions fetching -------------------------------

    //------------------------ @start Traits fetching ------------------------------
    axios.get("http://127.0.0.1:8000/api/trait").then(res => {
      console.log("response after fetching trait");
      console.log(res.data);
      this.setState({ traits: res.data });
    });
    //------------------------ @end Traits fetching -------------------------------
  }
  //------------------------ @end Fetching ----------------------------------------------------------------------------

  // -----------------------------@start handleChange of new user input ----------------------------------------------------
  handleChange = e => {
    this.setState({ [e.target.name]: e.target.value }, () => {
      console.log("handlechange below");
      console.log(this.state);
    });
  };
  // -----------------------------@end handleChange of new user input ----------------------------------------------------

  // -----------------------------@start handleSubmit to insert new user ----------------------------------------------------
  handleSubmit = e => {
    e.preventDefault();
    console.log("email in handleSubmit post api");
    console.log(this.state.email);
    axios // api to post user
      .post("http://127.0.0.1:8000/api/user", {
        email_param: this.state.email,
        password_param: this.state.password,
        footClickName_param: this.state.footclickName,
        age_param: this.state.age,
        footSelected_param: this.state.footSelected,
        height_param: this.state.height,
        locationSelected_param: this.state.locationSelected,
        positionSelected_param: this.state.positionSelected,
        traitSelected_param: this.state.traitSelected
      })
      .then(res => {
        console.log("Response in post api");
        console.log(res.data);
      })
      .catch(function(error) {
        console.log(error);
      });
  };
  // -----------------------------@end handleSubmit to insert new user -----------------------------------------------------------------

  render() {
    return (
      <div className="SignUpPage">
        <form
          class="text-center border border-light p-5"
          onSubmit={this.handleSubmit}
        >
          <p class="h4 mb-4">Register</p>

          {/* <!-- E-mail --> */}
          <input
            type="email"
            name="email"
            id="defaultRegisterFormEmail"
            class="form-control mb-4"
            placeholder="E-mail"
            onChange={this.handleChange}
            required
          />

          {/* <!-- Password --> */}
          <input
            type="password"
            id="defaultRegisterFormPassword"
            name="password"
            class="form-control"
            placeholder="Password"
            aria-describedby="defaultRegisterFormPasswordHelpBlock"
            onChange={this.handleChange}
            required
          />
          <small
            id="defaultRegisterFormPasswordHelpBlock"
            class="form-text text-muted mb-4"
          >
            At least 8 characters and 1 digit and 1 Capital Letter
          </small>
          {/* ---------------------------------------@start Footclick name -------------------------------------------- */}
          <div className="form-row mb-4">
            <div className="col">
              <input
                type="text"
                name="footclickName"
                id="defaultRegisterFormFirstName"
                className="form-control"
                placeholder="FootClick Name"
                onChange={this.handleChange}
                required
              />
            </div>
          </div>
          {/* ---------------------------------------@end Footclick name ------------------------------------------------ */}
          {/* ---------------------------------------@start AGE-------------------------------------------- */}
          <input
            type="date"
            class="form-control mb-4"
            name="age"
            onChange={this.handleChange}
            required
          />
          {/* ---------------------------------------@end AGE-------------------------------------------- */}
          {/* ---------------------------------------@start Foot-------------------------------------------- */}
          <div className="form-row mb-4">
            <div className="col">
              <select name="footSelected" onChange={this.handleChange}>
                <option value="default" selected="selected">
                  Choose your Preferred Foot
                </option>
                <option value="Right">Right</option>
                <option value="Left">Left</option>
              </select>
            </div>
          </div>
          {/* ---------------------------------------@end Foot-------------------------------------------- */}

          {/* ---------------------------------------@start HEIGHT-------------------------------------------- */}
          <input
            type="number"
            class="form-control mb-4"
            name="height"
            placeholder="Height in cm"
            onChange={this.handleChange}
            required
          />
          {/* ---------------------------------------@end HEIGHT-------------------------------------------- */}

          {/* ---------------------------------------@start Location-------------------------------------------- */}
          <div className="form-row mb-4">
            <div className="col">
              <select name="locationSelected" onChange={this.handleChange}>
                <option value="default" selected="selected">
                  Choose your Location
                </option>
                {/* ---------------------------------------@start Location mapping-------------------------------------------- */}
                {this.state.locations.map(item => (
                  <option value={item.location}>{item.location}</option>
                ))}
                {/* ---------------------------------------@end Location mapping-------------------------------------------- */}
              </select>
            </div>
          </div>
          {/* ---------------------------------------@end Location-------------------------------------------- */}

          {/* ---------------------------------------@start Position-------------------------------------------- */}
          <div className="form-row mb-4">
            <div className="col">
              <FormGroup>
                <Label for="exampleSelectMulti">Choose your Position</Label>
                <select
                  type="select"
                  name="positionSelected"
                  id="exampleSelectMulti"
                  multiple
                  onChange={this.handleChange}
                  required
                >
                  {this.state.positions.map(item => (
                    <option value={item.position}>{item.position}</option>
                  ))}
                </select>
              </FormGroup>
            </div>
          </div>
          {/* ---------------------------------------@end Position-------------------------------------------- */}

          {/* ---------------------------------------@start Trait-------------------------------------------- */}
          <div className="form-row mb-4">
            <div className="col">
              <FormGroup>
                <Label for="SelectMulti">Choose your Trait</Label>
                <select
                  type="select"
                  name="traitSelected"
                  id="SelectMulti"
                  onChange={this.handleChange}
                  multiple
                  required
                >
                  {this.state.traits.map(item => (
                    <option value={item.trait}>{item.trait}</option>
                  ))}
                </select>
              </FormGroup>
            </div>
          </div>
          {/* ---------------------------------------@end Trait-------------------------------------------- */}

          {/* <!-- Newsletter --> */}
          <div class="custom-control custom-checkbox">
            <input
              type="checkbox"
              class="custom-control-input"
              id="defaultRegisterFormNewsletter"
            />
            <label
              class="custom-control-label"
              for="defaultRegisterFormNewsletter"
            >
              Subscribe to our newsletter
            </label>
          </div>

          {/* <!-- Sign up button --> */}
          <button class="btn btn-info my-4 btn-block" type="submit">
            Sign in
          </button>
          {/* <input type="Submit" value="Sign In" /> */}
          {/* <!-- Social register --> */}
          <p>or sign up with:</p>

          <a href="#" class="mx-2" role="button">
            <i class="fab fa-facebook-f light-blue-text"></i>
          </a>
          <a href="#" class="mx-2" role="button">
            <i class="fab fa-twitter light-blue-text"></i>
          </a>
          <a href="#" class="mx-2" role="button">
            <i class="fab fa-linkedin-in light-blue-text"></i>
          </a>
          <a href="#" class="mx-2" role="button">
            <i class="fab fa-github light-blue-text"></i>
          </a>

          {/* <hr> */}

          {/* <!-- Terms of service --> */}
          <p>
            By clicking Sign up you agree to our &nbsp;
            <a href="#" target="_blank">
              terms of service
            </a>
          </p>
        </form>
        {/* <!-- Default form register --> */}
      </div>
    );
  }
}

export default SignUpPage;
