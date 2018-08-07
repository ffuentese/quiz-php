<?php

class Question
{
    public $question;
    public $answers;
    public $right_answer;
    
    function _construct()
    {
        $this->question = '';
        $this->answers = [];
        $this->right_answer = 0;
    }
    
    public function set_question($question)
    {
        if(preg_match('/^[\p{L}\p{S}\p{N} áéíóúñç¿?.-@]+$/', $question))
        {
            $this->question = $question;
        }
        
    }
    
    public function get_question()
    {
        return $this->question;
    }
    
    public function set_answer($answer)
    {
        if(preg_match('/^[\p{L}\p{S}\p{N} áéíóúñç¿?.-@]+$/', $answer))
        {
            $this->answers[] = $answer;
        }
        else {
            error_log("answer didn't pass validation");
        }
    }
    
    public function get_answers()
    {
        return $this->answers;
    }
    
    public function set_right_answer($right_answer)
    {
        if(is_numeric($right_answer) && $right_answer >= 0){
            $this->right_answer = $right_answer;
        }

    }
    
    public function get_right_answers()
    {
        return $this->right_answer;
    }
    
   
    
}