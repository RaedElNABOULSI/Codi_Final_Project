import React, { Component } from "react";
import axios, { post } from "axios";

//------------------------ @start import components ----------------------------------------------------------------
import NavbarPlayer from "../../components/NavbarPlayer/NavbarPlayer";
import Footer from "../../components/Footer/Footer";
//------------------------ @end import components ------------------------------------------------------------------

//------------------------@start import  scss link ----------------------------------------------------------------------------
import "../BestGoalsPage_Player/BestGoalsPage_Player.scss";
//--------------------------@end import scss link----------------------------------------------------------------------------------------
class BestGoalsPage_Player extends Component {
  constructor(props) {
    super(props);
    this.state = { data: [], image: [] };
    this.handleSubmit = this.handleSubmit.bind(this);
    this.handleChange = this.handleChange.bind(this);
    this.fileUpload = this.fileUpload.bind(this);
  }

  //------------------------ @start Fetching goal footage-------------------------------------------------------
  componentDidMount() {
    axios
      .get("http://127.0.0.1:8000/api/bestgoal")
      .then(res => {
        console.log(res.data);
        this.setState({ data: res.data });
      })
      .catch(error => {
        console.error(error);
      });
  }
  //------------------------ @end Fetching goal gootage -----------------------------------------------------------

  handleChange = e => {
    // this.setState({ fileUploaded: e.target.value }, () => {
    //   console.log("state in handleChange");
    //   console.log(this.state);
    // });
    let files = e.target.files || e.dataTransfer.files;
    if (!files.length) return;
    this.createImage(files[0]);
  };
  createImage(file) {
    let reader = new FileReader();
    reader.onload = e => {
      this.setState({
        image: e.target.result
      });
    };
    reader.readAsDataURL(file);
  }

  fileUpload(image) {
    const url = "http://localhost:8000/api/fileupload";
    const formData = {
      file: this.state.image,
      userName: localStorage.getItem("footclickName")
    };
    return post(url, formData).then(response => console.log(response));
  }

  //------------------------ @start handleSubmit File-------------------------------------------------------
  handleSubmit = e => {
    e.preventDefault();
    this.fileUpload(this.state.image);
    // axios
    //   .post("http://127.0.0.1:8000/api/fileupload", {
    //     fileUploaded_param: this.state.fileUploaded
    //   })
    //   .then(res => {
    //     console.log("state in handleSubmit");
    //     console.log(this.state);
    //     console.log("response of POST upload file api");
    //     console.log(res.data);
    //     // this.setState({ data: res.data });
    //   });
  };
  //------------------------ @end handleSubmit file------------------------------------------------------

  render() {
    return (
      <div className="BestGoalsPage_Player">
        <NavbarPlayer />
        <div className="BestGoalsPage_User_Content">
          <h1>Discover our Highlights</h1>
          <hr className="Horizontal_Line" />
          {/* --------------------------@start grid container--------------------------------------------- */}
          <div className="Parent_Grid">
            {/* ------------------------ @start mapping of goal footages ------------------------------------ */}
            {this.state.data.map(item => (
              <div className="Child_Grid">
                <img
                  src={`http://127.0.0.1:8000/images/${item.image}`}
                  alt="error"
                />

                <p>
                  <strong>Scored by: </strong> {item.footclick_name}
                </p>
              </div>
            ))}
            {/* ------------------------ @end mapping of goal footages -------------------------------------- */}
          </div>
          {/* --------------------------@end grid container--------------------------------------------- */}

          {/* --------------------------@start file upload--------------------------------------------- */}

          <div className="fileUpload">
            <form onSubmit={this.handleSubmit} encType="multipart/form-data">
              {/* -----------------------@start image------------ */}
              <input
                type="file"
                name="select_file"
                onChange={this.handleChange}
              />
              {/* -----------------------@end image--------- */}
              <button type="submit" name="upload">
                Upload
              </button>
            </form>
          </div>

          {/* --------------------------@end file upload--------------------------------------------- */}
        </div>
        <div className="Footer_BestGoalsPage_User">
          <Footer />
        </div>
      </div>
    );
  }
}

export default BestGoalsPage_Player;
