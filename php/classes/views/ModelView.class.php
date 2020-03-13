<?php
namespace views;

class ModelView extends \mvc\View {
  public function getHTML() {
    $data = $this->model->getAllData();
    $output = "<table class='table table-dark'><thead><th>ID</th><th>Voornaam</th><th>Achternaam</th><th>Aangemaakt</th></thead>";
    $output .= "<tbody>";
    foreach ($data as $row) {
      $output .= "<tr>";
      $output .= "<td>" . $row['ID'] . "</td>";
      $output .= "<td>" . $row['Voornaam'] . "</td>";
      $output .= "<td>" . $row['Achternaam'] . "</td>";
      $output .= "<td>" . $row['Aangemaakt'] . "</td>";
      $output .= "</tr>";
    }
    $output .= "</tbody></table>";
    return $output;
  }
}
 ?>
