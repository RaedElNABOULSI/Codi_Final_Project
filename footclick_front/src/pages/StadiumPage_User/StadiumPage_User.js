import React, { Component } from "react";
import axios from "axios";

//------------------------ @start import images ------------------------------------------------------------------------
import Filter from "../../assets/images/filter.svg";

//------------------------ @end import images------------------------------------------------------------------------

//------------------------ @start import components ----------------------------------------------------------------
import NavBar from "../../components/NavBar/NavBar";
import Footer from "../../components/Footer/Footer";
//------------------------ @end import components ----------------------------------------------------------------

//------------------------ @start import scss link ----------------------------------------------------------------------------
import "../StadiumPage_User/StadiumPage_User.scss";
//--------------------------@end import scss link ----------------------------------------------------------------------------------------

class StadiumPage_User extends Component {
  constructor(props) {
    super(props);
    this.state = { data: [], capacitySelected: [], orderSelected: [] };
  }

  //------------------------ @start Fetching ----------------------------------------------------------------------------
  componentDidMount() {
    axios.get("http://127.0.0.1:8000/api/stadium").then(res => {
      console.log(res.data);

      this.setState({ data: res.data });
    });
  }
  //------------------------ @end Fetching ----------------------------------------------------------------------------

  //------------------------ @start handleChange -----------------------------------------------------------------------
  getSelectorValue = e => {
    // var selector_name = e.target.name;
    this.setState({ [e.target.name]: e.target.value }, () => {
      // console.log(this.state);
      this.passSelectorValue();
    });
  };
  //------------------------ @end handleChange ------------------------------------------------------------------------

  //------------------------ @start passCapacityValue -----------------------------------------------------------------------
  passSelectorValue = () => {
    // console.log(this.state.capacitySelected);
    // call api
    axios
      .get("http://127.0.0.1:8000/api/filter_sort", {
        // pass capacity and order from state
        params: {
          selection_capacity_param: this.state.capacitySelected,
          selection_order_param: this.state.orderSelected
        }
      })
      .then(res => {
        console.log(res);

        this.setState({ data: res.data });
      })
      .catch(function(error) {
        console.log(error);
      })
      .finally(function() {
        // always executed
      });
    // call api
    // pass capacity and order from state
    // replace stadium from state
  };
  //------------------------ @end passCapacityValue------------------------------------------------------------------

  render() {
    return (
      <div className="StadiumPage_User">
        <NavBar />

        <h1 className="StadiumHeader">Choose your preferred Stadium</h1>
        <hr className="Horizontal_Line" />
        <div className="Filters">
          {/* ------------------------ @start FILTER BY CAPACITY----------------------------------------------------- */}
          <select name="capacitySelected" onChange={this.getSelectorValue}>
            <option value="default" selected="selected">
              Filter by Capacity
            </option>
            <option value="10" name="ten">
              10
            </option>
            <option value="12">12</option>
          </select>
          {/* ------------------------ @end FILTER BY CAPACITY----------------------------------------------------- */}
          {/* ------------------------ @start Sort BY PRICE----------------------------------------------------- */}
          &nbsp; &nbsp;
          <select name="orderSelected" onChange={this.getSelectorValue}>
            <option value="default" selected="selected">
              Sort by Price
            </option>
            <option value="desc">High to Low</option>
            <option value="asc">Low to High</option>
          </select>
          {/* ------------------------ @end Sort BY PRICE----------------------------------------------------- */}
          {/* <img src={Filter} /> */}
        </div>
        {/* ------------------------ @start GridParent---------------------------------------------- */}

        {/* ------------------------ @start mapping of Stadiums---------------------------------------------- */}
        {this.state.data.map(item => (
          <div className="Content_GridParent">
            <div className="Content_GridChildLeft">
              <img src={item.image} alt="error" />
            </div>
            <div className="Content_GridChildRight">
              <strong>Name:</strong> {item.name}
              <br />
              <br /> <strong>Capacity: </strong>
              {item.capacity}
              <br />
              <br />
              <strong>Region / District: </strong> {item.region}
              <br />
              <br />
              <strong>Price: </strong> {item.price}
            </div>
          </div>
        ))}
        {/* ------------------------ @end mapping of Stadiums---------------------------------------------- */}

        {/* ------------------------ @end GridParent---------------------------------------------- */}
        <div className="Footer_StadiumPage_User">
          <Footer />
        </div>
      </div>
    );
  }
}

export default StadiumPage_User;
