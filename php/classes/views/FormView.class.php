<?php
namespace views;

class FormView extends \mvc\View {
  public function getHTML() {
    $output = "<h1>Dit is de Form pagina</h1>";
    $output .= "<form>";
    $output .= "Voornaam:<input type='text' name='voornaam'>";
    $output .= "</form>";
    return $output;
  }
}


 ?>
