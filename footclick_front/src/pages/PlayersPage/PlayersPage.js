import React, { Component } from "react";

//------------------------ scss link ----------------------------------------------------------------------------
import "../PlayersPage/PlayersPage.scss";
//------------------------------------- ----------------------------------------------------------------------------

class PlayersPage extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <div className="PlayersPage">
        <p>players page</p>
      </div>
    );
  }
}

export default PlayersPage;
