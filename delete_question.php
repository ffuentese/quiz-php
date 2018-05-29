<?php
require_once("controller/CreateQuizController.php");
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['name'])) 
{
  $cq = new CreateQuizController();
  $cq->questions = [2]; 
  $val = $cq->get_from_DAO();
  unset($val[$_POST['id_question']]);
  $result = array_values($val);
  $cq->questions = $result;
  if($cq->del_to_DAO()){
      header('Status: 301 Moved permantly', false, 301);
      header('Location:/CreateQuiz.php');
      exit();
  } else {
      echo 'check your JSON';
  }
  
}
   