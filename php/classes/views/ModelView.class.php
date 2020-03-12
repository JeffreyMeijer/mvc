<?php
namespace views;

class ModelView extends \mvc\View {
  public function getHTML() {
    $data = $this->model->getAllData();
    $output = "<h1>TEST</h1>";
    return $output;
  }
}
 ?>
