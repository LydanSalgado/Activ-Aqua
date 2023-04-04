<?php

namespace Site_Activ_Aqua\Controllers;

use Site_Activ_Aqua\Core\Form;



class ConnectController extends Controller
{

    public function verif()
    {
        if (isset($_SESSION['token'])) {
            // var_dump($_POST);
            // var_dump($_SESSION['token']);
            if ($_POST['token'] == $_SESSION['token']) {
                /* TRAITEMENT OK */
                echo "vous êtes arrivé à bon port!";
            } else {
                /* TOKEN DIFFERENT => ERREUR */
                echo "token invalide";
            }
        } else {
            /* TOKEN INEXISTANT */
            echo "pas de token";
        }
    }
    
    public function index()
    { 
        
            $token = uniqid(rand(), true);
            $_SESSION['token'] = $token;
            
        
            if (isset($_POST['connexion'])) {
                if (!empty($_POST['logAdmin']) && !empty($_POST['passAdmin'])) {
                    $logDefault = "admin";
                    $passDefault = "admin1234";

                    $enterLog = isset($_POST['logAdmin']) ? htmlspecialchars($_POST['logAdmin']) : NULL;
                    $enterPass = isset($_POST['logAdmin']) ? htmlspecialchars($_POST['passAdmin']) : NULL;

                    if ($enterLog === $logDefault && $enterPass === $passDefault) {
                        $_SESSION['passAdmin'] = $enterPass;
                        
                        header('Location: index.php?controller=admin&action=index');
                    } 
                    
                }
            }

        



        $form = new Form();
        // index.php?controller=connect&action=verif
        $form->startForm("", "POST", ["class" => "adminForm", "enctype" => "multipart/form-data"]);
        //token authentification
        $form->addInput("hidden", "token", ["value" => $_SESSION['token'], "class" => "form-control"]);
        //login authentification with error message
        $form->addLabel("logAdmin", "Identifiant Administratif", ["class" => "form-label"]);
        $form->addLabel("", "", ["id" => "IdConnectEmpty", "class" => "error-form"]);
        $form->addInput("text", "logAdmin", ["id" => "logAdmin", "class" => "form-control", "placeholder" => "Votre identifiant administratif"]);
        //password authentification with error message
        $form->addLabel("passAdmin", "Mot de passe", ["class" => "form-label"]);
        $form->addLabel("", "", ["id" => "passConnectEmpty", "class" => "error-form"]);
        $form->addInput("password", "passAdmin", ["id" => "passAdmin", "class" => "form-control", "placeholder" => "Votre mot de passe"]);

        $form->addInput("submit", "connexion", ["value" => "Connexion", "class" => "btn-connect"]);

        $form->endForm();

        $this->render('admin/index', ["connectForm" => $form->getFormElements()]);
    }
}
