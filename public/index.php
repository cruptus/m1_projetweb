<?php
require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../core/Helper/functions.php';
\App\Helper\App::getAuth();

$router = new App\Router\Router($_GET['url']);

$router->get("/", 'HomeController@Racine');
$router->get("home", "HomeController@Index");

// php
$router->get("signin", "HomeController@Signin");
$router->get("signout", "HomeController@Signout");
$router->get("signup", "HomeController@Signup");
$router->post("signup", "HomeController@SignupPost");
$router->post("signin", "HomeController@SigninPost");

// html
$router->get("/html/dragdrop", "HtmlController@Drag");
$router->get("/html/google", "HtmlController@Google");

$router->run();
