<?php $title = "Activ' Aqua - CGV" ?>

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



<main class="">
    <h1>CONDITIONS G&Eacute;N&Eacute;RALES DE VENTE</h1>
    <hr>
    <div class="cgvBox">
        <h4>Aplicables à compter du 15 Septembre 2022</h4>
        <li class="cgvList">Clause n°1 : Objet et champ d'application</li>
        <p>Les présentes conditions générales de vente (CGV) constituent le socle de la négociation commerciale et sont systématiquement
            adressées ou remises à chaque acheteur pour lui permettre de passer commande. <br>
            Les conditions générales de vente décrites ci-après détaillent les droits et obligations de la société ACTIV'AQUA
            et de son client dans le cadre de la vente des prestations de services suivants : <br>
        <ul>
            <li>APPRENTISSAGE NATATION <br></li>
            <li>PERFECTIONNEMENT NATATION <br></li>
            <li>AQUASIRÈNE <br></li>
            <li>ACCOMPAGNEMENT AQUAPHOBIE <br></li>
            <li>PRESTATION À DOMICILE <br><br></li>
        </ul>
        Toute acceptation du devis en ce compris la clause « Je reconnais avoir pris connaissance et j'accepte les conditions
        générales de vente ci-annexées » implique l'adhésion sans réserve de l'acheteur aux présentes conditions générales de vente.
        </p>


        <li class="cgvList">Clause n° 2 : Prix </li>
        <p>Les prix des prestations de services vendues sont ceux en vigueur au jour de la prise de rendez-vous. <br>
            Ils sont libellés en euros et calculés hors taxes. <br>
            La société ACTIV'AQUA s'accorde le droit de modifier ses tarifs à tout moment. <br>
            Toutefois, elle s'engage à facturer les prestations de services commandées aux prix indiqués lors de l'enregistrement de
            la prise de rendez-vous.
        </p>


        <li class="cgvList">Clause n° 3 : Rabais et ristournes </li>
        <p>Les tarifs proposés comprennent les rabais et ristournes que la société ACTIV'AQUA serait amenée à octroyer compte tenu de ses
            résultats ou de la prise en charge par l'acheteur de certaines prestations.
        </p>


        <li class="cgvList">Clause n° 4 : Escompte </li>
        <p>Aucun escompte ne sera consenti en cas de paiement anticipé.
        </p>


        <li class="cgvList">Clause n° 5 : Modalités de paiement </li>
        <p>Le règlement des prestations de services s'effectue :
        <ul>
            <li>soit par espèce ; <br></li>
            <li>soit par virement ; <br></li>
        </ul>


        Les règlements seront effectués aux conditions suivantes : <br>
        <ul>
            <li>Paiement à l'exécution de la prestation de service <br></li>
            ou <br>
            <li>Paiement à la date de facturation</li>
        </ul>


        </p>
        </li>

        <li class="cgvList">Clause n° 6 : Retard de paiement </li>
        <p>En cas de défaut de paiement total ou partiel des prestations de services livrées à l'échéance,
            l'acheteur doit verser à la société ACTIV'AQUA une pénalité de retard égale à trois fois le taux de l'intérêt légal. <br>

            Le taux de l'intérêt légal retenu est celui en vigueur au jour de l'exécution de la prestation. <br>

            A compter du 1er janvier 2015, le taux d'intérêt légal sera révisé tous les 6 mois (Ordonnance n°2014-947 du 20 août 2014).<br>
            Cette pénalité est calculée sur le montant TTC de la somme restant due, et court à compter de la date d'échéance du prix sans
            qu'aucune mise en demeure préalable ne soit nécessaire. <br>
            En sus des indemnités de retard, toute somme, y compris l’acompte, non payée à sa date d’exigibilité produira de plein droit
            le paiement d’une indemnité forfaitaire de 40 euros due au titre des frais de recouvrement. <br>
            Articles 441-10 et D. 441-5 du code de commerce.

        </p>


        <li class="cgvList">Clause n° 7 : Clause résolutoire </li>
        <p>Si dans les quinze jours qui suivent la mise en oeuvre de la clause "Retard de paiement",
            l'acheteur ne s'est pas acquitté des sommes restant dues, la vente sera résolue de plein droit et pourra ouvrir droit à
            l'allocation de dommages et intérêts au profit de la société ACTIV'AQUA.
        </p>


        <li class="cgvList">Clause n° 8 : Force majeure </li>
        <p>La responsabilité de la société ACTIV'AQUA ne pourra pas être mise en oeuvre si la non-exécution ou le retard dans
            l'exécution de l'une de ses obligations décrites dans les présentes conditions générales de vente découle d'un cas de
            force majeure. <br> À ce titre, la force majeure s'entend de tout événement extérieur, imprévisible et irrésistible au sens de
            l'article 1148 du Code civil.
        </p>


        <li class="cgvList">Clause n° 9 : Tribunal compétent </li>
        <p>Tout litige relatif à l'interprétation et à l'exécution des présentes conditions générales de vente est soumis au droit français.
            À défaut de résolution amiable, le litige sera porté devant le Greffe du Tribunal de commerce d'Orléans.
        </p>


        <h5>Fait à Orlèans , le 01/07/2022.</h5>
    </div>
</main>