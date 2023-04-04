<?php $title = "Activ' Aqua - Contact";
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


<main class="main_contact">

    <div class="timessheet">
        <div class="presentation">
            <h1>Contacter Activ' Aqua</h1>
            <hr>
        </div>
        <h3>Comment nous joindre ? <br> En cliquant sur le numéro et le mail situé en dessous !</h3>

        <div class="infoContact">
            <div class="phone_ref">
                <i class="fa-4x fa-solid fa-mobile-screen-button"></i><br>
                <a class="linkContact" href="tel:+33611981807">Contacter moi <br> au <br>
                    0611981807</a><br>
            </div>

            <div class="mail_ref">
                <i class="fa-4x fa-regular fa-envelope"></i><br>
                <a class="linkContact" href="mailto:theo.roubaut@live.fr">Theo.roubaut@live.fr</a>
            </div>
        </div>
    </div>
    </div>
</main>
<div class="localAdress">
    <div class="subtitle">
        <h1>Adresse</h1>
    </div>
    <hr>
    <p style="font-size:17px ;">Les cours se déroule à la piscine Rue de l'Yvette à Olivet. <br>
        N'hésite pas à consulter les horaires d'ouverture de la piscine et leurs tarifs d'entrées<br>
        en cliquant sur l'icone en dessous <br>
        <a class="fa-4x fa-solid fa-person-swimming" href="https://www.piscinepoutyl-olivet.fr/baignade-et-balneo/" target="_blank"></a>
    </p>
    <div class="maps_loc">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2676.831387707883!2d1.8903231156394058!3d47.86222867920239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e4e5ab8d8fa529%3A0xdce976dc3ec65014!2s220%20Rue%20de%20l&#39;Yvette%2C%2045160%20Olivet!5e0!3m2!1sfr!2sfr!4v1652258816442!5m2!1sfr!2sfr" width="1900" height="700" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>