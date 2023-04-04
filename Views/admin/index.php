<?php $title = "Activ' Aqua - Connexion";
?>

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
    <h1>Connexion espace Administratif</h1>
</div>
<hr>
<?php echo $connectForm; ?>