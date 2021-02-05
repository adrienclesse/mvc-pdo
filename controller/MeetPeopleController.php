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

        // Getting the userscore
        $fetch = $query->fetch();
        $userScore = $fetch['score'];
        var_dump($userScore);
        echo "<br>";

        $sql2 = "SELECT * FROM `users`;"; // and exclude current user
        $query2 = $conn->prepare($sql2);
        $query2->execute();

        // Getting all scores from database
        $fetch2 = $query2->fetchAll(PDO::FETCH_COLUMN, 4);
        $allScores = $fetch2;
        var_dump(array_filter($allScores));

        echo "<br>";

        // Search for equal scores
        $searchstring = $userScore;

        foreach($allScores as $string)
        {
            if(strpos($searchstring, $string) !== false) 
            {
                $sql4 = "SELECT email, username FROM `users` WHERE score=$searchstring;"; // and exclude current user
                $query4 = $conn->prepare($sql4);
                $query4->execute();
                $fetch4 = $query4->fetch(PDO::FETCH_ASSOC);

                var_dump($fetch4);
                break;
            }
        }

        echo "<br>";

        foreach($allScores as $score){
            echo("<br>" . $score);
        }
        echo "<br>";

        $sql3 = "SELECT * FROM `users`;"; // and exclude current user
        $query3 = $conn->prepare($sql3);
        $query3->execute();

        $fetch3 = $query3->fetch(PDO::FETCH_ASSOC);
        var_dump($fetch3);

        $matchingScore = $allScores;

        if($userScore == $matchingScore){
            //show email with link;
            echo "sameLevel@lang.com";   
        }   else{
                echo "no match found";
            }
        
        //load the view
        require 'view/meetpeople.php';
                    
    }
}