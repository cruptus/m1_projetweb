<?php

namespace App\Controller;

use App\Helper\Validator;

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
        $this->template = "home";
        $this->render("home");
    }

    /**
     * Page de signin
     * @throws \App\Router\RouterException
     */
    public function signin(){
        $this->render("signin");
    }

    public function signinPost(){
        $validator = new Validator($_POST);
        $validator->isEmail("email", "Email ou mot de passe invalide");
        $validator->isPassword("password", "Email ou mot de passe invalide");
        if($validator->isValid()){
            /**
             * Todo : Inscription
             */
        } else {
            $errors[] = $validator->getErrors()[0];
            $this->render("signin", compact("errors"));
        }
    }

    /**
     * Page de signup
     */
    public function signup(){
        $this->render("signup");
    }

    /**
     * Redirection vers la page home
     */
    public function racine(){
        header('Location: /home');
        die();
    }



}