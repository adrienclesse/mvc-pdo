<?php
require_once "../controller/QuizController.php";
session_start();

$quiz = new QuizController();
$questions = $quiz->getQuestions();

$i = 0;


require "quizview.php";
