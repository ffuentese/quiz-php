<?php

require_once("dto/Question.php");
require_once("controller/CreateQuizController.php");
  header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $questions = [];
    $cq = new CreateQuizController();
    


    $question = new Question();
    $question->set_question($_POST['question']);
    
    for ($j = 0; $j < count($_POST['answers']); $j++)
    {
        $question->set_answer($_POST['answers'][$j]);
    }
	try {
    if ($_POST['right_answer'] > count($_POST['answers']) || $_POST['right_answer'] < 1) {
		throw new Exception('Form Error: The right answer inserted was wrong.');
	} 
	
	$question->set_right_answer($_POST['right_answer']);

    $questions[] = $question;   
            
    $cq->set_questions($questions);
 
    if($cq->save_to_DAO())
    {
        print_r(json_encode($cq->get_from_DAO()));
        print_r("\n");
    } 
    else {
		http_response_code(400);
        json_encode(array(
			'error' => array(
				'msg' => 'No se pudo guardar',
				'code' => 0,
			),
		));
    }
	
	} catch (Exception $e) {
		http_response_code(400);
		echo json_encode(array(
			'error' => array(
				'msg' => $e->getMessage(),
				'code' => $e->getCode(),
			),
		));
	}
    

}

?>