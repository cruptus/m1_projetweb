<?php
require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../core/Helper/functions.php';
\App\Helper\App::getAuth();

$router = new App\Router\Router($_GET['url']);

$router->get("/", 'HomeController@Racine');
$router->get("home", "HomeController@Index");
$router->get("signin", "HomeController@Signin");
$router->post("signin", "HomeController@SigninPost");

$router->run();
