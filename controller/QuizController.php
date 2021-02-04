<?php
declare(strict_types = 1);

// TODO: secure connection with database

class QuizController

{
    

    public function getQuestions(){
        $mysqli = new mysqli('localhost', 'root', '', 'fantasy-language-exchange');

        //select 5 random questions from the language table
        $sql = "SELECT * FROM `high_valyrian`
                    ORDER BY RAND()
                    LIMIT 5";
        $questions = $mysqli->query($sql);

        return $questions;
    }

    public function getAnswers($id)
    {
        $mysqli = new mysqli('localhost', 'root', '', 'fantasy-language-exchange');

        $sql = "SELECT `right_answer` FROM `high_valyrian` WHERE id=$id";

        $answer = $mysqli->query($sql);

        return $answer->fetch_all(MYSQLI_ASSOC);

    }

}