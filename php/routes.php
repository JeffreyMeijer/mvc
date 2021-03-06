<?php
define("DEFAULT_ROUTE", "home");

$routes = array(
  "home" => array(
    "view" => "HomeView",
    "controller" => "HomeController",
  ),
  "form" => array(
    "view" => "FormView",
    "controller" => "FormController",
  ),
  "test" => array(
    "view" => "TestView",
    "controller" => "TestController",
  ),
  "model" => array(
    "view" => "ModelView",
    "controller" => "ModelController",
    "model" => "ModelModel",
  ),
  "red" => array(
    "controller" => "RedController",
  ),
  "blue" => array(
    "view" => "BlueView",
    "controller" => "BlueController",
  ),
);

 ?>
