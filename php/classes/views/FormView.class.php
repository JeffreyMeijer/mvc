<?php
namespace views;

class FormView extends \mvc\View {
  public function getHTML() {
    $voornaam = $this->controller->getGetData("voornaam");
    $achternaam = $this->controller->getGetData("achternaam");
    $output = "<h1>Dit is de Form pagina</h1>";
    $output .= "<form method='GET'>";
    $output .= "<p>Voornaam: <input type='text' name='voornaam'></p>";
    $output .= "<p>Achternaam: <input type='text' name='achternaam'></p>";
    $output .= "<input type='submit' name='submit'>";
    //$output .= "<a href=\"form?voornaam=$voornaam&achternaam=$achternaam\">Submit</a>";
    $output .= "</form>";
    $output .= "<br/>";
    $output .= "<h3>Voornaam: ". $voornaam ."</h3>";
    $output .= "<h3>Achternaam: ". $achternaam. "</h3>";
    return $output;
  }
}


 ?>
