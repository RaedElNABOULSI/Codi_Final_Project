import React, { Component } from "react";
import axios from "axios";
import getAge from "get-age";
import { FormGroup, Label, Input } from "reactstrap";
import currentDate from "current-date";
import { Redirect } from "react-router-dom";
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
      locationIdSelected: [],
      positionIdSelected: [],
      traitIdSelected: [],
      roleIdSelected: [],
      locations: [],
      traits: [],
      positions: [],
      roles: [],
      togglePlayerRole: false,
      redirectLogin: false
    };
  }
  //--- Fetch Locations, Position , Traits and Roles from database
  componentDidMount() {
    axios.get("http://127.0.0.1:8000/api/location").then(res => {
      console.log("response after fetching locations", res.data);
      this.setState({ locations: res.data });
    });
    axios.get("http://127.0.0.1:8000/api/position").then(res => {
      console.log("response after fetching positions", res.data);
      this.setState({ positions: res.data });
    });
    axios.get("http://127.0.0.1:8000/api/trait").then(res => {
      console.log("response after fetching traits", res.data);
      this.setState({ traits: res.data });
    });
    // axios.get("http://127.0.0.1:8000/api/role").then(res => {
    //   console.log("response after fetching roles", res.data);
    //   this.setState({ roles: res.data }, () => {
    //     console.log("ROLES STATE IS : ", this.state.roles[1].id);
    //   });
    // });
  }
  handleAgeChange = e => {
    this.setState({ [e.target.name]: getAge(e.target.value) }, () => {
      console.log("Age is", this.state);
    });
  };
  handleChange = e => {
    this.setState({ [e.target.name]: e.target.value }, () => {
      console.log("state in handleChange is", this.state.locationIdSelected);
    });
  };
  handleMultiSelectChange = e => {
    const options = [...e.target.options];
    // debugger;
    const selected_options = options.filter(option => {
      return option.selected;
    });
    this.setState(
      {
        [e.target.name]: selected_options.map(option => {
          return option.value;
        })
      },
      () => {
        console.log("state in handleMultiSelectChange is ", this.state);
      }
    );
  };
  handleSubmit = e => {
    e.preventDefault();
    console.log("state in handleSubmit", this.state);
    axios // api to post user
      .post("http://127.0.0.1:8000/api/user", {
        email_param: this.state.email,
        password_param: this.state.password,
        footClickName_param: this.state.footclickName,
        age_param: this.state.age,
        footSelected_param: this.state.footSelected,
        height_param: this.state.height,
        locationIdSelected_param: this.state.locationIdSelected,
        positionIdSelected_param: this.state.positionIdSelected,
        traitIdSelected_param: this.state.traitIdSelected
      })
      .then(res => {
        console.log("RESPONSE in handleSubmit POST api", res.data);
        // route to loginpage
        this.setState({ redirectLogin: !this.state.redirectLogin });
      })
      .catch(function(error) {
        console.log(error);
      });
  };

  render() {
    console.log("state in handleSubmit", this.state);
    if (this.state.redirectLogin) {
      return <Redirect to="/login" />;
    }
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
            onChange={this.handleAgeChange}
            max={currentDate("date")}
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
              <select
                name="locationIdSelected"
                onChange={this.handleChange}
                required
              >
                <option value="">Choose your Location</option>
                {/* ---------------------------------------@start Location mapping-------------- */}
                {this.state.locations.map(item => (
                  <option value={item.id}>{item.location}</option>
                ))}
                {/* ---------------------------------------@end Location mapping---------------- */}
              </select>
            </div>
          </div>
          {/* ---------------------------------------@end Location-------------------------------------------- */}

          {/* ---------------------------------------@start Position-------------------------------------------- */}
          <div className="form-row mb-4">
            <div className="col">
              <FormGroup>
                {/* <Label for="exampleSelectMulti">Choose your Position</Label> */}
                <Input
                  type="select"
                  name="positionIdSelected"
                  id="exampleSelectMulti"
                  onChange={this.handleChange}
                  required
                >
                  <option value="">Choose your Position</option>
                  {this.state.positions.map(item => (
                    <option value={item.id}>{item.position}</option>
                  ))}
                </Input>
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
                  name="traitIdSelected"
                  id="SelectMulti"
                  onChange={this.handleMultiSelectChange}
                  multiple
                  required
                >
                  {this.state.traits.map(item => (
                    <option value={item.id}>{item.trait}</option>
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
            Sign Up
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
