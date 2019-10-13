import React, { Component } from "react";
import axios from "axios";
//------------------------ @start scss link ----------------------------------------------------------------------------
import "../Testimonial/Testimonial.scss";
//-------------------------@end scss link-----------------------------------------------------------------------------------

class Testimonial extends Component {
  constructor(props) {
    super(props);
    this.state = { data: [] };
  }
  //------------------------ @start Fetching ----------------------------------------------------------------------------
  componentDidMount() {
    axios.get("http://127.0.0.1:8000/api/testimonial").then(res => {
      console.log(res.data);
      this.setState({ data: res.data });
    });
  }
  //------------------------ @end Fetching ----------------------------------------------------------------------------
  render() {
    return (
      <div className="Testimonial">
        <h2>Testimonials</h2>
        <br />
        <hr className="Horizontal_Line" />
        {/* ------------------------ @start Testimonial Grid---------------------------------------------------------------- */}
        <div className="Parent_Grid">
          {/* ------------------------ @start mapping of Testimonials ---------------------------------------------- */}
          {this.state.data.map(item => (
            <div className="Child_Grid">
              <img src={item.image} alt="error" />
              <h3>{item.name}</h3>
              <p>{item.content}</p>
            </div>
          ))}
          {/* ------------------------ @end mapping of Testimonials ---------------------------------------------- */}
        </div>
        {/* ------------------------ @end Testimonial Grid---------------------------------------------------------------- */}
      </div>
    );
  }
}

export default Testimonial;
