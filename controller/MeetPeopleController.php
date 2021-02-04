<?php
declare(strict_types = 1);

class MeetPeople
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.
        
        session_start();
        
        require "config.php";

        

        if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){

            $conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
            $sql = "SELECT * FROM `user` WHERE id=3;";
            $query = $conn->prepare($sql);
            $query->execute();

            echo $_SESSION["id"];

             //load the view
            require 'view/meetpeople.php';
            
            exit;

        }

        // while($fetch = $query->fetch()){
        //     $score = htmlspecialchars($_SESSION["username"]);
        //     echo $score;
        //     echo $fetch['email'];
        // }
        
       
            
    }
}