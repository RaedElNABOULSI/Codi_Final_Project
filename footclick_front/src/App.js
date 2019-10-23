import React, { Component } from "react";

//------------------------ @start import pages ---------------------------------------------------------------------------
import LandingPage_User from "./pages/LandingPage_User/LandingPage_User";
import AboutPage from "./pages/AboutPage/AboutPage";
import BestGoalsPage_User from "./pages/BestGoalsPage_User/BestGoalsPage_User";
import ContactPage from "./pages/ContactPage/ContactPage";
import StadiumPage_User from "./pages/StadiumPage_User/StadiumPage_User";
import SignUpPage from "./pages/SignUpPage/SignUpPage";
import LogInPage from "./pages/LogInPage/LogInPage";
//------------------------ @end import pages ---------------------------------------------------------------------------

import { Route, Switch } from "react-router-dom";

//------------------------ @start import scss link ----------------------------------------------------------------------------
import "./App.scss";
//------------------------@end import scss link ----------------------------------------------------------------------------------------
class App extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
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
          <Route path="/login" render={() => <LogInPage />} />
        </Switch>
      </div>
    );
  }
}

export default App;
