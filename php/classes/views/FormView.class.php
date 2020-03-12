<?php
namespace views;

class FormView extends \mvc\View {
  public function getHTML() {
    $voornaam = filter_var($this->controller->getGetData("voornaam"), FILTER_SANITIZE_STRING);
    $achternaam = filter_var($this->controller->getGetData("achternaam"), FILTER_SANITIZE_STRING);
    $output = "<h1>Dit is de Form pagina</h1>";
    $output .= "<form method='GET'>";
    $output .= "<p>Voornaam: <input type='text' name='voornaam'></p>";
    $output .= "<p>Achternaam: <input type='text' name='achternaam'></p>";
    $output .= "<input type='submit' name='submit'>";
    $output .= "</form>";
    $output .= "<br/>";
    $output .= "<h3>Voornaam: ". $voornaam ."</h3>";
    $output .= "<h3>Achternaam: ". $achternaam. "</h3>";
    return $output;
  }
}


 ?>
