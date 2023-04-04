<?php

namespace Site_Activ_Aqua\Controllers;

use Site_Activ_Aqua\Core\Form;
use Site_Activ_Aqua\Entities\Member;
use Site_Activ_Aqua\Models\MemberModel;

class MemberController extends Controller
{


    public function index()
    {
        
     
        if (Form::validatePost($_POST, ['activity', 'name', 'age', 'phone_number', 'mail', 'adress', 'level', 'goal', 'available'])) {
        
            $activity = htmlspecialchars($_POST["activity"]);
            $name = htmlspecialchars($_POST["name"]);
            $age = htmlspecialchars(intval($_POST["age"]));
            $phone = htmlspecialchars($_POST["phone_number"]);
            $mail = htmlspecialchars($_POST["mail"]);
            $adress = htmlspecialchars($_POST["adress"]);
            $level = htmlspecialchars($_POST["level"]);
            $goal = htmlspecialchars(($_POST["goal"]));
            $available = htmlspecialchars($_POST["available"]);
            $comment = htmlspecialchars($_POST["comment"]);
           
            $member = new Member();
            $member->setActivity($activity);
            $member->setName($name);
            $member->setAge($age);
            $member->setPhone_Number($phone);
            $member->setMail($mail);
            $member->setAdress($adress);
            $member->setLevel($level);
            $member->setGoal($goal);
            $member->setAvailable($available);
            $member->setComment($comment);
            
            
            $model = new MemberModel();
            $model->create($member);
            
            header("Location:index.php");
        } else {
            $erreur = !empty($_POST) ? "Oupsss il y'a une erreur dans ton formulaire. Vérifie le !" : "";
        }

        
        $form = new Form();

        $form->startForm("", "POST", ["class" => "memberForm", "enctype" => "multipart/form-data"]);

        $form->startDiv(["class" => "divFlex"]);

        $form->startDiv(["class" => "divForm"]);

        $form->addLabel("activity", "Activitée", ["class" => "form-label"]);
        $form->addLabel("", "", ["id" => "activityFormEmpty", "class" => "error-form"]);
        $form->addSelect(
            "activity",
            array("" => "Choisissez vôtre cours", "apprentissage" => "APPRENTISSAGE", "perfectionnement" => "PERFECTIONNEMENT", "aquaphobie" => "AQUAPHOBIE", "aquasirene" => "AQUASIRENE", "prestation a domicile" => "PRESTATION A DOMICILE"),
            ["id" => "activity", "class" => "form-control"]
        );


        $form->addLabel("name", "Nom et Prénom", ["class" => "form-label"]);
        $form->addLabel("", "", ["id" => "nameFormEmpty", "class" => "error-form"]);
        $form->addInput("text", "name", ["id" => "name", "class" => "form-control", "placeholder" => "Noms et prénoms du participant"]);

        $form->addLabel("age", "Âge", ["class" => "form-label"]);
        $form->addLabel("", "", ["id" => "ageFormEmpty", "class" => "error-form"]);
        $form->addLabel("", "", ["id" => "ageFormError", "class" => "error-form"]);
        $form->addInput("text", "age", ["id" => "age", "class" => "form-control", "placeholder" => "L'âge du participant"]);
        $form->endDiv();

        $form->startDiv(["class" => "divForm"]);
        $form->addLabel("phone_number", "Numéro de téléphone", ["class" => "form-label"]);
        $form->addLabel("", "", ["id" => "phoneFormEmpty", "class" => "error-form"]);
        $form->addLabel("", "", ["id" => "phoneFormError", "class" => "error-form"]);
        $form->addInput("text", "phone_number", ["id" => "phone_number", "class" => "form-control", "placeholder" => "Votre numéro de téléphone mobile ou fixe"]);

        $form->addLabel("mail", "Adresse mail", ["class" => "form-label"]);
        $form->addLabel("", "", ["id" => "emailFormEmpty", "class" => "error-form"]);
        $form->addLabel("", "", ["id" => "emailFormError", "class" => "error-form"]);
        $form->addInput("text", "mail", ["id" => "mail", "class" => "form-control", "placeholder" => "Votre adresse mail"]);

        $form->addLabel("adress", "Adresse complète", ["class" => "form-label"]);
        $form->addLabel("", "", ["id" => "adressFormEmpty", "class" => "error-form"]);
        $form->addInput("text", "adress", ["id" => "adress", "class" => "form-control", "placeholder" => "Adresse, code postal, ville"]);
        $form->endDiv();

        $form->startDiv(["class" => "divForm"]);

        $form->addLabel("level", "Niveau de départ", ["class" => "form-label"]);
        $form->addLabel("", "", ["id" => "levelFormEmpty", "class" => "error-form"]);
        $form->addInput("text", "level", ["id" => "level", "class" => "form-control", "placeholder" => "Quel est votre niveau actuel ?"]);

        $form->addLabel("goal", "Vos objectifs", ["class" => "form-label"]);
        $form->addLabel("", "", ["id" => "goalFormEmpty", "class" => "error-form"]);
        $form->addInput("text", "goal", ["id" => "goal", "class" => "form-control", "placeholder" => "Quel sont vos objectifs finaux ?"]);

        $form->addLabel("available", "Vos disponibilités", ["class" => "form-label"]);
        $form->addLabel("", "", ["id" => "availableFormEmpty", "class" => "error-form"]);
        $form->addInput("datetime-local", "available", ["id" => "available", "class" => "form-control", "placeholder" => "Quand êtes vous disponible ? Jour/Tranche horaire"]);
        $form->endDiv();
        $form->endDiv();

        $form->addLabel("comment", "Commentaire", ["class" => "form-label comment-form"]);
        $form->addTextarea("comment", "", ["id" => "comment", "class" => "form-control", "rows" => 10, "placeholder" => "Signaler ici tous problème de santé ou handicape qui nous permettra d'aménager le cours"]);

        $form->startDiv(["class" => "divCGV"]);
        $form->addInput("checkbox", "check", ["value" => "", "class" => "check-control"]);
        $form->addLink("index.php?controller=cgv&action=index", "Lire les Conditions Générales de Vente", ["value" => "", "class" => "link-control", "target" => "_blank"]);
        $form->endDiv();
        $form->addLabel("", "", ["id" => "checkFormEmpty", "class" => "error-form"]);

        $form->addInput("submit", "add", ["value" => "Envoyer ma demande de cours", "class" => "btn-control"]);

        $form->endForm();

        $this->render('member/index', ["addForm" => $form->getFormElements(), "erreur" => $erreur]);
    }
}
