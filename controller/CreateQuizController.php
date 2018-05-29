<?php
  header('Content-Type: application/json; charset=utf-8');


require_once("dto/Question.php");

class CreateQuizController
{
    public $questions;
    public $filename;
    
    function _construct()
    {
        $this->questions = [];
        $this->filename = dirname(__DIR__). '/questions.json';
    }
    
    public function set_questions($questions)
    {
        $ok = true;
        foreach ($questions as $i)
        {
            if(!($i instanceof Question))
            {
                $ok = false;
            }
        }
        
        if ($ok)
        {
            $this->questions = $questions;
        }
    }
    
    public function get_questions()
    {
        return $this->questions;
    }
    
    public function save_to_DAO()
    {
        if ($this->questions)
        {
            try 
            {
                $data = json_encode($this->questions);
                $prev = $this->get_from_DAO();
                $form = $this->questions;
                if(isset($prev)){
                    $arr = array_merge( $prev, $form );
                    $data = json_encode($arr);
                }
                $w = file_put_contents(dirname(__DIR__). '/questions.json', $data);
                if($w && $w > 0) {
                    return true;
                }
            
            }
            catch (exception $e) 
            {
                 die ('ERROR: ' . $e->getMessage() . $this->questions);    
                 return false;
                 
            }
            
        }
    }
    
    public function get_from_DAO()
    {
        if ($this->questions)
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
        
    }
    
    public function del_to_DAO()
    {
        if ($this->questions)
        {
            try 
            {
                $data = json_encode($this->questions);
                $w = file_put_contents(dirname(__DIR__). '/questions.json', $data);
                if($w && $w > 0) {
                    return true;
                }
            
            }
            catch (exception $e) 
            {
                 die ('ERROR: ' . $e->getMessage() . $this->questions);    
                 return false;
                 
            }
            
        }
    }
    
}

    