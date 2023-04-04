<?php $title = "Activ' Aqua - Activitées" ?>

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
    <h1>Activ' Aqua</h1>
    <h4><em>Vos objectifs, notre priorité.</em></h4>
</div>


<div class="activityContent">
    <ul class="activityList">
        <li class="activityDetail">
            <button id="learnId" class="wave_btn">
                <span class='spanButton'>
                    <h2 class="titleActivity">Apprentissage</h2>
                </span>
            </button>
            <figure class="imgLearn">
                <img src="image/learnSwim.jpg" alt="" height="" width="">
            </figure>
            <p style="text-align: center;" class="pActivity">
                Remplissez le formulaire d'inscription pour dès à présent réserver un créneau d'apprentissage adapté à votre niveau ou celui
                de votre enfant. <br><br>

                L'accompagnement pédagogique est personnalisé en fonction des aptitudes motrices et des objectifs du participant,
                cepenant, le schéma classique du cheminement des séances pour un niveau de départ zéro (enfant ou adulte) est le suivant :<br><br>

                Mise en sécurité et autonomie relative (délivrance du diplôme de C-A-A et/ou ASSN)<br><br>
                <i style="color: red;" class="fa-2x fa-solid fa-arrow-down-long"></i><br><br>
                Apprentissage des nages codifiés et autonomie confirmée <br><br>
                <i style="color: red;" class="fa-2x fa-solid fa-arrow-down-long"></i><br><br>
                Perfectionnement des techniques de nage et optimisation de la performance <br><br>

                <em>Nombre de séances moyennes pour l'apprentissage des techniques de nages : entre 6 et 10 séances.</em><br><br>

                <a href="index.php?controller=member&action=index"><button class="btn_book">Demander votre cours</button></a>
            </p>
        </li>
        <li class="activityDetail">
            <button id="perfectId" class="wave_btn">
                <span class='spanButton'>
                    <h2 class="titleActivity">Perfectionnement</h2>
                </span>
            </button>
            <figure class="imgPerfect">
                <img src="image/perfectSwim.jpg" alt="" height="" width="">
            </figure>
            <p style="text-align: center;" class="pActivity">
                Remplissez le formulaire d'inscription pour dès à présent réserver un créneau de perfectionnement adapté à votre niveau ou celui
                de votre enfant. <br><br>

                Pour le participant sachant déjà nager, l'objectif de l'accompagnement pédagogique sera d'optimiser le coût
                énergétique des déplacements à travers un apprentissage des techniques de nages. <br><br>

                Ainsi le but final des séances sera l'autonomie confirmée du participant en milieu aquatique ainsi qu'un essouflement amoindri. <br><br>

                <em>Nombre de séances moyennes pour un perfectionnement des techniques de nages : entre 4 et 8 séances.</em><br><br>

                <a href="index.php?controller=member&action=index"><button class="btn_book">Demander votre cours</button></a>
            </p>
        </li>
        <li class="activityDetail">
            <button id="phobiaId" class="wave_btn">
                <span class='spanButton'>
                    <h2 class="titleActivity">Aquaphobie</h2>
                </span>
            </button>
            <figure class="imgPhobia">
                <img src="image/phobiaSwim.jpg" alt="" height="" width="">
            </figure>
            <p style="text-align: center;" class="pActivity">
                Remplissez le formulaire d'inscription pour dès à présent réserver un créneau d'accompagnement pour l'aquaphobie adapté à
                vôtre degré d'anxiété (pour adulte et enfant). <br><br>

                Pour un accompagnement optimal, les séances se déroulent en très petit comité (<em>2 participant maximum</em>).<br><br>

                L'objectif des séances sera la suppression progressive totale ou partielle de l'anxiété et du stress ressentie dans le
                milieu aquatique en utilisant divers outils comme la PNL (<em>programmation neuro linguistique</em>), la relaxation ainsi que
                des exercices pratiques. <br><br>

                <em>Nombre de séances moyennes pour un accompagnement particulier de l'aquaphobie : entre 4 et 8 séances.</em><br><br>


                <a href="index.php?controller=member&action=index"><button class="btn_book">Demander votre cours</button></a>
            </p>
        </li>
        <li class="activityDetail">
            <button id="mermaidId" class="wave_btn">
                <span class='spanButton'>
                    <h2 class="titleActivity">Aquasirène</h2>
                </span>
            </button>
            <figure class="imgMermaid">
                <img src="image/mermaidSwim.jpg" alt="" height="" width="">
            </figure>
            <p style="text-align: center;" class="pActivity">
                Remplissez le formulaire d'inscription pour dès à présent réserver une séance d'Aquasirène. <br><br>

                Faites plonger votre enfant dans le monde féerique et ludique tout en lui permettant de développer ses aptitudes motrices aquatiques
                tels que les déplacements, apnée et proprioception. <br><br>
                Peu importe le niveau de départ de votre enfant, nos mâitres nageurs diplômés sauront les faire progresser et leurs faire
                passer un moment inoubliable. <br><br>
                Un moment dédié pour la prise de photo est prévue dans le temps de la séance pour permettre d'immortaliser ce voyage sous les mers !
                <br><br>

                <em>Les séances d'Aquasirène sont ouvertent aux enfants de 6 à 13 ans.</em><br>
                <em>La séance se déroule sur 45 minutes.</em><br>
                <em>Les costumes et les monopalmes sont fournis.</em><br><br>


                <a href="index.php?controller=member&action=index"><button class="btn_book">Demander votre cours</button></a>
            </p>
        </li>
        <li class="activityDetail">
            <button id="poolHouseId" class="wave_btn">
                <span class='spanButton'>
                    <h2 class="titleActivity">À domicile</h2>
                </span>
            </button>
            <figure class="imgPoolHouse">
                <img src="image/houseSwim.jpg" alt="" height="" width="">
            </figure>
            <p style="text-align: center;" class="pActivity">
                Remplissez le formulaire d'inscription pour dès à présent réserver une préstation aquatique dans vôtre piscine privée. <br><br>

                Les préstations réalisables par notre équipe sont diverses : <br><br>
                - Apprentissage de la natation seul ou à plusieurs. <br>
                - Préparation sportive. <br>
                - Organisation d'activité ludique pour vos journées piscine, des anniversaires... <br><br><br>

                <em>Un devis vous sera communiqué à la suite de votre demande dans les plus bref délais</em><br><br>


                <a href="index.php?controller=member&action=index"><button class="btn_book">Demander votre cours</button></a>
            </p>
        </li>
    </ul>
</div>

<div id="container">
    <div id="theTarget">
        <div style="background-image: url(image/slide1.jpg)"></div>
        <div style="background-image: url(image/slide2.jpg)"></div>
        <div style="background-image: url(image/slide3.jpg)"></div>
        <div style="background-image: url(image/slide4.jpg)"></div>
    </div>
</div>