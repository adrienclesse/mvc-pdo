<?php
declare(strict_types = 1);

class RegisterWelcome
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        session_start();
 
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: http://localhost/MVC-pdo/index.php?page=login");
    exit;
}
require 'view/welcome.php';
    }
}
?>