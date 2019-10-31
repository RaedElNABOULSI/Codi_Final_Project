import React, { Component } from "react";
import axios from "axios";

//------------------------@start import scss link --------------------------------------------------------------
import "../LogInPage/LogInPage.scss";
//------------------------@end import scss link  --------------------------------------------------------

class LogInPage extends Component {
  constructor(props) {
    super(props);
    this.state = {
      email: [],
      password: []
    };
  }

  // -----------------------------@start handleChange of  user input ----------------------
  handleChange = e => {
    this.setState({ [e.target.name]: e.target.value }, () => {
      console.log("handlechange below");
      console.log(this.state);
    });
  };
  // -----------------------------@end handleChange of user input ----------------------

  // -----------------------------@start handleSubmit to fetch login api ----------------------------------
  handleSubmit = e => {
    e.preventDefault();
    console.log("email in handleSubmit post api");
    console.log(this.state.email);
    axios // api to post user
      .post("http://127.0.0.1:8000/api/login", {
        email_param: this.state.email,
        password_param: this.state.password
      })
      .then(res => {
        console.log("Response in post api");
        console.log(res.data);
      })
      .catch(function(error) {
        console.log(error);
      });
  };
  // -----------------------------@end handleSubmit to fetch login api ----------------------------
  render() {
    return (
      <div className="LogInPage">
        {/* ------------------------------@start Login Form ----------------------------------------------------------- */}
        <form
          className="text-center border border-light p-5"
          onSubmit={this.handleSubmit}
        >
          <p class="h4 mb-4">Sign in</p>

          {/* ---------------------@start Email------------- */}
          <input
            name="email"
            type="email"
            id="defaultLoginFormEmail"
            className="form-control mb-4"
            placeholder="E-mail"
            onChange={this.handleChange}
          />
          {/* ---------------------@end Email------------- */}

          {/* ---------------------@start Password------------- */}
          <input
            name="password"
            type="password"
            id="defaultLoginFormPassword"
            className="form-control mb-4"
            placeholder="Password"
            onChange={this.handleChange}
          />
          {/* ---------------------@end Password------------- */}

          <div class="d-flex justify-content-around">
            <div>
              {/* ---------------------@start Remember me------------- */}

              <div class="custom-control custom-checkbox">
                <input
                  type="checkbox"
                  class="custom-control-input"
                  id="defaultLoginFormRemember"
                />
                <label
                  class="custom-control-label"
                  for="defaultLoginFormRemember"
                >
                  Remember me
                </label>
              </div>
              {/* ---------------------@end Remember me------------- */}
            </div>
            {/* ---------------------@start Forgot Password------------- */}
            <div>
              <a href="">Forgot password?</a>
            </div>
            {/* ---------------------@end Forgot Password------------- */}
          </div>

          {/* <!-- Sign in button --> */}
          <button
            class="btn btn-info btn-block my-4"
            value="Sign In"
            type="submit"
          >
            Sign In
          </button>

          {/* ---------------------@start Social Login------------- */}
          <p>or sign in with:</p>

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
          {/* ------------------------@end Social Login--------------------------------- */}
        </form>
        {/* ------------------------------@end Login Form ----------------------------------------------------------- */}
      </div>
    );
  }
}

export default LogInPage;
