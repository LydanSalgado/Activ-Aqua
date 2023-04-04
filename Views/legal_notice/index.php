<?php $title = "Activ' Aqua - Mentions Légales" ?>

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



<main class="center_page">
    <h1>MENTIONS L&Eacute;GALES</h1>
    <hr>
    <div class="legal_notice">
        <strong class="mentionsFont">Propriétaire du site</strong><br>
        <p class="mentionsFont">Théo Roubaut</p><br>
        <strong class="mentionsFont">Adresse mail</strong><br>
        <p class="mentionsFont">Theo.roubaut@live.fr</p><br>
        <strong class="mentionsFont">Téléphone</strong><br>
        <p class="mentionsFont">06.01.02.03.04</p>
        <strong class="mentionsFont">Adresse</strong><br>
        <p class="mentionsFont">15 Rue de la Piscine - 45190 - Beaugency</p>
        <strong class="mentionsFont">Réalisation du site</strong><br>
        <p class="mentionsFont">Dylan Salgado - 45260 - Montereau</p>

    </div>
</main>