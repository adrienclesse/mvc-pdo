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
        //TODO: compare score current users with all userscores to find a match
        $conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $id = $_SESSION['id'];

        $sql = "SELECT * FROM `users` WHERE id=$id;";
        $query = $conn->prepare($sql);
        $query->execute();

        $sqlAllScores = "SELECT * FROM `users`;"; // and exclude current user
        $query2 = $conn->prepare($sqlAllScores);
        $query2->execute();

        // Getting the userscore
        $fetch = $query->fetch();
        $userScore = $fetch['score'];
        // var_dump($userScore);
        // echo "<br>";

        // Getting the people with 
        $fetch2 = $query2->fetch();
        $sameLevel = $fetch2['score'];
        //var_dump($sameLevel);


        if($userScore = $sameLevel){
            //show email with link;
        }
        
        //load the view
        require 'view/meetpeople.php';
                    
    }
}