<?php
namespace controllers;

class RedController extends \mvc\Controller {
  public function __construct() {
    header("location:blue");
  }
  // $this->view = header("location:bluecontroller.class.php");
}
 ?>
