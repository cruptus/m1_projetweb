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

// css
$router->get("/css/rotate", "CssController@Rotate");
$router->get("/css/translate", "CssController@Translate");

// Game
$router->get("/js/2048", "JSController@Game2048");
$router->post("/js/2048", "JSController@Game2048Post");
$router->get("/js/snake", "JSController@GameSnake");
$router->post("/js/snake", "JSController@GameSnakePost");


$router->run();
