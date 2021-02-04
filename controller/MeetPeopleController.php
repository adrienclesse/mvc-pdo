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
        require "config.php";
        $conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $sql = "SELECT * FROM `users` WHERE id=37;"
        $query = $conn->prepare($sql);
        $query->execute();
 
        while($fetch = $query->fetch()){

        
       
        
        //load the view
        require 'view/meetpeople.php';
    }            
    }
}