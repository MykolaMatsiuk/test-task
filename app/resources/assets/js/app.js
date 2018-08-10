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
import Charts from "./components/Charts";
import Dashboard from "./components/Dashboard";
import Tables from "./components/Tables";

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

if (document.getElementById("charts")) {
  ReactDOM.render(
    <Charts />,
    document.getElementById("charts")
  );
}

if (document.getElementById("dashboard")) {
  ReactDOM.render(
    <Dashboard />,
    document.getElementById("dashboard")
  );
}

if (document.getElementById("tables")) {
  ReactDOM.render(
    <Tables />,
    document.getElementById("tables")
  );
}

if (document.getElementById("map")) {
  ReactDOM.render(<GMap />, document.getElementById("map"));
}
