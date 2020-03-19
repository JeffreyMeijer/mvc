<?php
namespace views;

class BlueView extends \mvc\View {
  public function getHTML() {
    $output = "Dit is de blue view<br/>";
    $output .= "Je bent hier via de RedController naar de BlueController gegaan";
    return $output;
  }
}


 ?>
