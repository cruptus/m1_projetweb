<?php

namespace App\Controller;

use App\Helper\App;
use App\Helper\Validator;
use App\Helper\Captcha;
use App\Helper\Mail;
use App\Config;
use App\Model\Account;

class HomeController extends Controller {

    /**
     * HomeController constructor
     */
    public function __construct() {

    }

    /**
     * permet de retourner la home page
     * @throws \App\Router\RouterException
     */
    public function index(){
        $this->render("home");
    }

    public function signin(){
        $this->render("signin");
    }

    public function signinPost(){
        $validator = new Validator($_POST);
        $validator->isEmail("email", "Email ou mot de passe invalide");
        $validator->isPassword("password", "Email ou mot de passe invalide");
        if($validator->isValid()){


        }else{
            $errors[] = $validator->getErrors()[0];
            $this->render("signin", compact("errors"));
        }
    }

    /**
     * Redirection vers la page home
     */
    public function racine(){
        header('Location: /home');
        die();
    }

}