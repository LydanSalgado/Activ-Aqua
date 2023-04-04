<?php
if (!isset($_SESSION['passAdmin'])) {
    header('Location: index.php?controller=connect&action=index');
}
?>

<?php $title = "Activ' Aqua - Historique des préstations" ?>

<?php
if (!isset($_SESSION['passAdmin'])) {
    $login = "<li><a class='fa-regular fa-user' href='index.php?controller=connect&action=index'></a></li>";
    $logout = "";
    $management = "";
    $historical = "";
} else {
    $login = "";
    $logout = "<li><a class='fa-solid fa-arrow-right-from-bracket' href='index.php?controller=logout&action=index'></a></li>";
    $management = "<li><a href='index.php?controller=admin&action=index'>Gestion</a></li>";
    $historical = "<li class='nav_history'><a href='index.php?controller=history&action=index'>Historique</a></li>";
}
?>



<div class="presentation">
<h1 style="text-align: center;">Historique des prestations</h1>
<hr>
</div>

<table class="table">
  <thead>
    <tr>
    <th>Date de demande</th>
      <th>Nom & Prénom</th>
      <th>Activité</th>
      <th class="ageCol">Âge</th>
      <th>Coordonées</th>
      <th>Adresse</th>
      <th>Niveau</th>
      <th>Objectif</th>
      <th>Disponibilité</th>
      <th>Commentaire</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($list as $value) {
      echo "<tr>";
      echo "<td>" . $value->send_date . "</td>";
      echo "<td>" . $value->name . "</td>";
      echo "<td>" . $value->activity . "</td>";
      echo "<td>" . $value->age . "</td>";
      echo "<td>" . $value->phone_number . "  -   " . $value->mail . "</td>";
      echo "<td>" . $value->adress . "</td>";
      echo "<td>" . $value->level . "</td>";
      echo "<td>" . $value->goal . "</td>";
      echo "<td>" . $value->available . "</td>";
      echo "<td>" . $value->comment . "</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>