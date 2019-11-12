import React, { Component, useCallback } from "react";

//------------------------ @start import pages ---------------------------------------------------------------------------
import LandingPage_User from "./pages/LandingPage_User/LandingPage_User";
import AboutPage from "./pages/AboutPage/AboutPage";
import AboutPage_Player from "./pages/AboutPage_Player/AboutPage_Player";
import BestGoalsPage_User from "./pages/BestGoalsPage_User/BestGoalsPage_User";
import BestGoalsPage_Player from "./pages/BestGoalsPage_Player/BestGoalsPage_Player";
import ContactPage from "./pages/ContactPage/ContactPage";
import StadiumPage_User from "./pages/StadiumPage_User/StadiumPage_User";
import StadiumPage_Player from "./pages/StadiumPage_Player/StadiumPage_Player";
import ContactPage_Player from "./pages/ContactPage_Player/ContactPage_Player";
import SignUpPage from "./pages/SignUpPage/SignUpPage";
import LogInPage from "./pages/LogInPage/LogInPage";
import LandingPage_Player from "./pages/LandingPage_Player/LandingPage_Player";
import PlayersPage from "./pages/PlayersPage/PlayersPage";
//------------------------ @end import pages ---------------------------------------------------------------------------

import { Route, Switch } from "react-router-dom";

//------------------------ @start import scss link ----------------------------------------------------------------------------
import "./App.scss";
import { instanceOf } from "prop-types";
//------------------------@end import scss link ----------------------------------------------------------------------------------------
class App extends Component {
  constructor(props) {
    super(props);
    // this.setUser = this.setUser.bind(this);
    this.state = {
      user: []
    };
  }
  setUser = (
    user,
    callback = () => {
      console.log("PROPS IN APP", this.state);
    }
  ) => {
    this.setState({ user }, callback);
  };

  render() {
    return (
      <div className="Application">
        <Switch>
          <Route path="/" exact render={() => <LandingPage_User />} />
          <Route path="/about" render={() => <AboutPage />} />
          <Route path="/bestgoals" render={() => <BestGoalsPage_User />} />
          <Route path="/contactus" render={() => <ContactPage />} />
          <Route path="/stadiums" render={() => <StadiumPage_User />} />
          <Route path="/register" render={() => <SignUpPage />} />
          <Route
            path="/login"
            render={() => <LogInPage setUser={this.setUser} />}
          />
          <Route
            path="/landing_player"
            render={props => (
              <LandingPage_Player {...props} user={this.state.user} />
            )}
          />
          <Route path="/playersPage" render={() => <PlayersPage />} />
          <Route
            path="/contactus_player"
            render={() => <ContactPage_Player />}
          />
          <Route
            path="/stadiums_player"
            render={() => <StadiumPage_Player />}
          />
          <Route path="/about_player" render={() => <AboutPage_Player />} />
          <Route
            path="/bestgoals_player"
            render={() => <BestGoalsPage_Player />}
          />
        </Switch>
      </div>
    );
  }
}

export default App;
