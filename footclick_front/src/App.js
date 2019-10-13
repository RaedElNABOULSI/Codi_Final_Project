import React, { Component } from "react";

//------------------------ @start import pages ---------------------------------------------------------------------------
import LandingPage_User from "./pages/LandingPage_User/LandingPage_User";
//------------------------ @end import pages ---------------------------------------------------------------------------

import { Route, Switch, withRouter } from "react-router-dom";

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
        </Switch>
      </div>
    );
  }
}

export default App;
