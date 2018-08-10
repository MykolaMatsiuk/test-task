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
  render() {
    return (
      <Map
        google={this.props.google}
        zoom={10}
        style={style}
        initialCenter={{ lat: 50.45466, lng: 30.5238 }}
      >
        <Marker
          onClick={this.onMarkerClick}
          name={"Current location"}
        />
      </Map>
    );
  }
}

export default GoogleApiWrapper({
  apiKey: "AIzaSyBp_a04cL3FXoLFREOtOJPCV3ORpN8j658"
})(GMap);
