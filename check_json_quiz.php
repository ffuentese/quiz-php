<?php 

require_once("controller/CreateQuizController.php");
  header('Content-Type: application/json; charset=utf-8');
  
  $cq = new CreateQuizController();
  $cq->questions = [2]; 
  $val = $cq->get_from_DAO();
  print_r(json_encode($val, JSON_UNESCAPED_UNICODE));
