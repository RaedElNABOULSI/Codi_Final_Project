import React, { Component } from "react";
import { Button, Form, FormGroup, Label, Input, FormText } from "reactstrap";

//------------------------@start import scss link ----------------------------------------------------------------------------
import "../SignUpPage/SignUpPage.scss";
//------------------------------------@end import scss link  ----------------------------------------------------------------------------

class SignUpPage extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <div className="SignUpPage">
        <form class="text-center border border-light p-5">
          <p class="h4 mb-4">Register</p>

          {/* <!-- E-mail --> */}
          <input
            type="email"
            id="defaultRegisterFormEmail"
            class="form-control mb-4"
            placeholder="E-mail"
            required
          />

          {/* <!-- Password --> */}
          <input
            type="password"
            id="defaultRegisterFormPassword"
            class="form-control"
            placeholder="Password"
            aria-describedby="defaultRegisterFormPasswordHelpBlock"
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
                id="defaultRegisterFormFirstName"
                className="form-control"
                placeholder="FootClick Name"
              />
            </div>
          </div>
          {/* ---------------------------------------@end Footclick name ------------------------------------------------ */}

          {/* ---------------------------------------@start Foot-------------------------------------------- */}
          <div className="form-row mb-4">
            <div className="col">
              <select name="footSelected">
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
            placeholder="Height in cm"
            required
          />
          {/* ---------------------------------------@end HEIGHT-------------------------------------------- */}

          {/* ---------------------------------------@start Location-------------------------------------------- */}
          <div className="form-row mb-4">
            <div className="col">
              <select name="locationSelected">
                <option value="default" selected="selected">
                  Choose your Location
                </option>
                <option value="North Lebanon">North Lebanon</option>
                <option value="Mount Lebanon">Mount Lebanon</option>
                <option value="Beirut">Beirut</option>
                <option value="South Lebanon">South Lebanon</option>
                <option value="Bekaa">Bekaa</option>
              </select>
            </div>
          </div>
          {/* ---------------------------------------@end Location-------------------------------------------- */}

          {/* ---------------------------------------@start Position-------------------------------------------- */}
          <div className="form-row mb-4">
            <div className="col">
              <FormGroup>
                <Label for="exampleSelectMulti">Choose your Position</Label>
                <Input
                  type="select"
                  name="positionSelected"
                  id="exampleSelectMulti"
                  multiple
                  required
                >
                  <option value="Goalkeeper">Goalkeeper</option>
                  <option value="Defender">Defender</option>
                  <option value="Midfielder">Midfielder</option>
                  <option value="Attacker">Attacker</option>
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
                <Input
                  type="select"
                  name="traitSelected"
                  id="SelectMulti"
                  multiple
                  required
                >
                  <option value="Goalkeeper">Speedster</option>
                  <option value="Defender">Dribbler</option>
                  <option value="Midfielder">Playmaker</option>
                  <option value="Attacker">Engine</option>
                  <option value="Attacker">Strength</option>
                  <option value="Attacker">Clinical Finisher</option>
                </Input>
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
