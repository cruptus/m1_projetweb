<?php

namespace App\Controller;

use App\Helper\App;
use App\Helper\Validator;
use App\Model\User;

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
            $user = new User(['email' => $_POST['email'], 'password' => $_POST['password']]);
            $user->login();
            $this->racine();
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
     * Page de signup
     */
    public function signupPost(){
        $user = new User([
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'password_valid' => $_POST['password_valid'],
            'pseudo' => $_POST['pseudo']
        ]);
        if($user->isValid()){
            if($user->save()){
                $success = 'Vous êtes maintenant inscrit. Un email vous a été envoyé.';
            }else{
                $errors[] = 'Email ou pseudo deja utilisé';
            }
        }else
            $errors = $user->getErrors();
        $this->render("signup", compact('errors', 'success'));
    }

    public function signout(){
        App::getAuth()->disconnect();
        $this->racine();
    }

    /**
     * Redirection vers la page home
     */
    public function racine(){
        header('Location: /home');
        die();
    }



}