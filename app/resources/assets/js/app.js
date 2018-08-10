/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require("./bootstrap");

import React from "react";
import ReactDOM from "react-dom";

import Navbar from "./components/Navbar";
import Cards from "./components/Cards";
import GMap from "./components/Map";

if (document.getElementById("navbarik")) {
  ReactDOM.render(
    <Navbar />,
    document.getElementById("navbarik")
  );
}

if (document.getElementById("cards")) {
  ReactDOM.render(
    <Cards />,
    document.getElementById("cards")
  );
}

if (document.getElementById("map")) {
  ReactDOM.render(<GMap />, document.getElementById("map"));
}
