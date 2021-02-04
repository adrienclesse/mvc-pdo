<?php
declare(strict_types=1);

//include all your model files here
require 'Model/User.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';
require 'Controller/RegisterController.php';
require 'Controller/LoginController.php';
require 'Controller/WelcomeController.php';
require 'Controller/ResetPasswordController.php';
require 'Controller/LogOutController.php';




//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();

if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
}

if(isset($_GET['page']) && $_GET['page'] === 'home') {
    $controller = new HomepageController();
}

if(isset($_GET['page']) && $_GET['page'] === 'login') {
    $controller = new LoginController();
}


if(isset($_GET['page']) && $_GET['page'] === 'register') {
    $controller = new RegisterController();
}

if(isset($_GET['page']) && $_GET['page'] === 'welcome') {
    $controller = new RegisterWelcome();
}

if(isset($_GET['page']) && $_GET['page'] === 'reset-password') {
    $controller = new RegisterResetPassword();
}

if(isset($_GET['page']) && $_GET['page'] === 'logout') {
    $controller = new RegisterLogOut();
}



$controller->render($_GET, $_POST);