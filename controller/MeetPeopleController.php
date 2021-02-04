<?php
declare(strict_types = 1);

class MeetPeople
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $level = 
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.
        
        session_start();
        
        require "config.php";
        //TODO: create variable $id for current user
        //TODO: compare score current users with all userscores to find a match
        $conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $id = $_SESSION['username'] = 2;
        $sql = "SELECT * FROM `users` WHERE id=$id;";
        $query = $conn->prepare($sql);
        $query->execute();
 
        while($fetch = $query->fetch()){

            echo $fetch['score'];
       
        
        //load the view
        require 'view/meetpeople.php';
    }            
    }
}