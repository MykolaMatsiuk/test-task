import React, { Component } from "react";
import {
  Map,
  InfoWindow,
  Marker,
  GoogleApiWrapper
} from "google-maps-react";

const style = {
  width: "70%",
  height: "70%"
};

class GMap extends Component {
  constructor() {
    super();
    this.state = {
      show:
        roles[0].name === "superadmin" ||
        roles[0].name === "admin"
          ? "true"
          : false,
      lat: null,
      lng: null,
      coord: []
    };
    this.inputLat = this.inputLat.bind(this);
    this.inputLng = this.inputLng.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  inputLat(e) {
    this.setState({
      lat: e.target.value
    });
  }

  inputLng(e) {
    this.setState({
      lng: e.target.value
    });
  }

  handleSubmit(e) {
    e.preventDefault();
    let obj  = {};
    obj.lat = this.state.lat;
    obj.lng = this.state.lng;
    this.state.coord.push(obj);
    console.log(this.state.coord);
  }

  render() {
    return (
      <div>
        {this.state.show ? (
          <form onSubmit={this.handleSubmit}>
            <div className="row">
              <div className="form-group col-3">
                <label htmlFor="inp">Type laltitude:</label>
                <input
                  id="inp"
                  className="form-control"
                  onChange={this.inputLat}
                />
              </div>
              <div className="form-group col-3">
                <label htmlFor="inp2">Type longitude:</label>
                <input
                  id="inp2"
                  className="form-control"
                  onChange={this.inputLng}
                />
              </div>
            </div>
            <input type="submit" value="Submit" />
          </form>
        ) : null}
        <Map
          google={this.props.google}
          zoom={10}
          style={style}
          initialCenter={{ lat: 50.45466, lng: 30.5238 }}
        >
          {this.state.coord.map(el => {
            <Marker
              onClick={this.onMarkerClick}
              name={"Current location"}
              position={{
                lat: el.lat,
                lng: el.lng
              }}
            />
          })}
        </Map>
      </div>
    );
  }
}

export default GoogleApiWrapper({
  apiKey: "AIzaSyBp_a04cL3FXoLFREOtOJPCV3ORpN8j658"
})(GMap);
