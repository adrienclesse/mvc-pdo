<?php
declare(strict_types = 1);

// TODO: secure connection with database

class QuizController

{

    public function getQuestions(){

        require "config.php";
        //$conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);

        //select 5 random questions from the language table
        $sql = "SELECT * FROM `high_valyrian`
                    ORDER BY RAND()
                    LIMIT 5";
        $questions = $pdo->query($sql);

        return $questions;
    }


}