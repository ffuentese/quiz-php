<?php

require_once("dto/Question.php");

class QuizEvalController
{
    public $questions;
    public $filename;
    public $answers;
    
    function _construct()
    {
        $this->questions = [];
        $this->filename = dirname(__DIR__). '/questions.json';
        $this->answers = [];
    }
    
    public function get_from_DAO()
    {
  
            try
            {
                $this->filename = dirname(__DIR__). '/questions.json';
                if($filecontent = file_get_contents($this->filename) !== false){

                $arr1 = json_decode(file_get_contents($this->filename), true);
                }
            }
            catch (exception $e)
            {
                 die ('ERROR: ' . $e->getMessage());  
            }
            finally
            {
                if (isset($arr1))
                {
                    
                    return $arr1; 
                }
                   
            }
            
    }
    
    public function check_answers()
    {
        $ans = $this->answers;
        $qus = $this->get_from_DAO();
        
        $count = 0;
        
        if (count($ans) == count($qus))
        {
            for ($i = 0; $i < count($qus); $i++)
            {
                if ($ans[$i] == $qus[$i]['right_answer']-1)
                {
                    $count++;    
                }
            }
        } 
        return $count;
    }
    
    
    
    
}