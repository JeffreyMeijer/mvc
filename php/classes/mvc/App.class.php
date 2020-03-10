<?php
  namespace mvc;

  class App {

    private $view;
    private $controller;

    public function __construct() {
      $this->controller = new \controllers\TestController(null);
      $this->view = new \views\TestView($this->controller,null);
    }
    public function __toString() {
      return $this->view->getHTML();
      // return "This is APP";
    }
  }

 ?>
