<?php
declare(strict_types = 1);

class RegisterLogOut
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        session_start();
 
        // Unset all of the session variables
        $_SESSION = array();
         
        // Destroy the session.
        session_destroy();
         
        // Redirect to login page
        header("location: http://localhost/MVC-pdo/index.php?page=login");
        exit;
        
    }
    
}
?>