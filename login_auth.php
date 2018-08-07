<?php
require_once("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if(isset($_POST['submit']))
    {
        $user = Config::$dbUsername;
        $password = Config::$dbPassword;
        $input_pass = $_POST['password'];
        if ($_POST['username'] == $user && password_verify($input_pass, $password))
        {
            session_start();
            $_SESSION['name']=$_POST['username'];
		    header('Status: 301 Moved permantly', false, 301);
    		header('Location:CreateQuiz.php');
    		exit();
        }    
        else {
            header('Status: 301 Moved permantly', false, 301);
    		header('Location:Login.php');
    		exit();
        }
    }
}