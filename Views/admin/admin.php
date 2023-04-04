<?php
if (!isset($_SESSION['passAdmin'])) {
    header('Location: index.php?controller=connect&action=index');
}
?>

<?php $title = "Activ' Aqua - Gestion administrative" ?>

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
<h1 style="text-align: center;">Gestion des demandes</h1>
<hr>
</div>




<ul class="slideButton">
    <li><button class="slideDown">Ouvrir les demandes</button></li>
    <li><button class="slideUp">Fermer les demandes</button></li>
</ul>

<div class="listDiv">
    <?php
    foreach ($list as $value) {

        echo "<li class='moreInfo'>";
        echo "<h6 style='display: none;'>$value->id_member</h6>";

        echo "<h2 class='nameList'> <span class='familyMaj'>$value->name</span> <span class='send_date'>$value->send_date</span></h2>";
        
        echo "<div class='manageMember'><label class='listMember' for='activity'>Activitée :</label> <p class='pValue'> $value->activity </p></div>";

        echo "<div class='manageMember'><label class='listMember' for='age'>Âge :</label><p class='pValue'> $value->age </p></div>";

        echo "<div class='manageMember'><label class='listMember' for='phone_number'>Contact : </label> <p class='pValue'> $value->phone_number / $value->mail </p></div>";

        echo "<div class='manageMember'><label class='listMember' for='adress'>Adresse : </label><p class='pValue'> $value->adress</p></div>";

        echo "<div class='manageMember'><label class='listMember' for='level'>Son niveau : </label><p class='pValue'> $value->level </p></div>";

        echo "<div class='manageMember'><label class='listMember' for='goal'>Ces objectifs : </label><p class='pValue'> $value->goal </p></div>";

        echo "<div class='manageMember'><label class='listMember' for='available'>Disponibilité : </label><p class='pValue'> $value->available  </p></div>";

        echo "<div class='manageMember'><label class='listMember' for='comment'>Commentaire : </label><p class='pValue'> $value->comment  </p></div>";

        echo "<div class='manageMember'><a class='btn-transfer' href='index.php?controller=admin&action=transferAdmin&id=$value->id_member'><button class='btn-grad'>Traiter</button></a></div>";
        echo "</li>";
        
    }
    ?>
</div>