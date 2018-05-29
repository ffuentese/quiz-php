<?php

require_once("dto/Question.php");
require_once("controller/QuizEvalController.php");
  header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $qe = new QuizEvalController();
    $values = [];
    
     foreach($_POST as $field => $value) {
            $values[] = $value;
     }
    
    $qe->answers = $values;
    
    $resultquiz = $qe->check_answers();
        
    if(isset($resultquiz)){
        echo $resultquiz;
    }

}