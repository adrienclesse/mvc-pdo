<?php
require_once "../controller/Score.php";
$score =0;
array_pop($_GET);
$rightAnswers = [];
$quiz = new Score();

foreach (array_keys($_GET) as $key){
    $answer = $quiz->getAnswers($key);
    foreach ($answer as $value){
        array_push($rightAnswers, $value['right_answer']);
    }
}

foreach($rightAnswers as $answer){
    if(array_search($answer, $_GET)){
        $score += 1;
    }
}

require "scoreview.php";