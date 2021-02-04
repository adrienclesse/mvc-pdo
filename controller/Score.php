<?php


class Score
{


    public function getAnswers($id)
    {

        //$conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $mysqli = new mysqli('localhost', 'root', '', 'fantasy-language-exchange');

        $sql = "SELECT `right_answer` FROM `high_valyrian` WHERE id=$id";

        $answer = $mysqli->query($sql);

        return $answer->fetch_all(MYSQLI_ASSOC);

    }

}