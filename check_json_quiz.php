<?php 

require_once("controller/CreateQuizController.php");
  header('Content-Type: application/json; charset=utf-8');
  session_start();
 if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token'])  
{ 
  $cq = new CreateQuizController();
  $cq->questions = [2]; 
  $val = $cq->get_from_DAO();
  print_r(json_encode($val, JSON_UNESCAPED_UNICODE));
} else {
	http_response_code(400);
}

