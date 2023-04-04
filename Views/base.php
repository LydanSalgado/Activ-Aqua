<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Icone Onglet -->
    <link rel="icon" href="image/logo.png" sizes="16*16">

    <!-- Font Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <!-- Fichier Style CSS -->
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/style_form.css">
    <link rel="stylesheet" href="css/style_home.css">
    <link rel="stylesheet" href="css/style_legalNotice.css">
    <link rel="stylesheet" href="css/style_contact.css">
    <link rel="stylesheet" href="css/style_adminList.css">
    <link rel="stylesheet" href="css/style_cgv.css">
    <link rel="stylesheet" href="css/style_history.css">
    <link rel="stylesheet" href="css/skippr-master/dist/skippr.css">

    <!-- CDN JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Fichier JQuery JS -->
    <script src="js/index_jq.js"></script>
    <script src="js/validForm.js"></script>
    <script src="js/homePop.js"></script>
    <script src="js/slide.js"></script>
    <script src="js/adminList.js"></script>
    <script src="js/connectValid.js"></script>




</head>

<body>
    <section class="top_page">
        <header class="header_page">
            <a href="index.php"><img class="logo_society" src="image/logo.png" alt="Logo Activ Aqua"></a>
            <nav class="nav_menu">
                <ul class="list_menu">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="index.php?controller=member&action=index">Réservation</a></li>
                    <li><a href="index.php?controller=contact&action=index">Contact</a></li>
                    <?= $login ?>
                    <?= $logout ?>

                </ul>
                <ul class="manage_list">
                    <?= $management ?>
                    <?= $historical ?>
                </ul>
            </nav>
        </header>
        <div class="slogan_society">
            <h1 class="slogan_society">Vos objectifs, notre priorité.</h1>
        </div>

        <div class="sos_alert">
            <img class="sos" src="image/sos.png" alt="SOS PRO">
        </div>

        <aside class="sos_numb">
            <div class="sos_com1">
                <p>Vous souhaitez faire appel à mes services pour un remplacement ou une préstation en urgence ?</p>
                <button class="answer_yes">Oui</button>
                <button class="answer_no">Non</button>
            </div>

            <div class="sos_com2">
                <p class="sos_contact">Veuillez me contacter au : <br> <span style="font-size: 1.8em ;">06.01.02.03.04</span></p>
                <span class="close">X</span>
            </div>
        </aside>
    </section>

    <main>
        <?= $content ?>
    </main>



    <section class="bot_page">
        <footer class="footer_page">
            <div class="mention_copy">
                <p>Activ' Aqua 2020 ®</p>
                <p><a href="index.php?controller=cgv&action=index">CGV</a></p>
                <a href="index.php"><img class="logo_society" src="image/logo.png" alt="Logo Activ Aqua"></a>
                <p>Copyright 2022 &copy;</p>
                <p><a href="index.php?controller=legal&action=index">Mentions légales</a></p>
            </div>
        </footer>

        <script src="css/skippr-master/dist/skippr.js"></script>
    </section>
</body>

</html>