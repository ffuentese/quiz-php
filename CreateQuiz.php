<?php
session_start();
if(!isset($_SESSION['name']) | !$_SESSION['name'])
{
    header('Status: 301 Moved permantly', false, 301);
    header('Location:/Login.php');
    exit();
} 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create a Quiz</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>    
<body>

<header>
    <div class="container">
    <h1>Write the quiz:</h1>
    </div>
    </header>
    <div class="container">
    <form id="qform">
        <span class=""></span>
        <fieldset>
            <div class="form-group">
                <input type="hidden" name="id" value="0"/>
            <label for="question">Question:</label>
        <input class="form-control" type="text" id="question" name="question" required/>
        </div>
        <div class="form-group">
        <label for="answers">Answers:</label>
        </div>
        <div class="form-group">
        <input class="form-control" type="text"  name="answers[]" required/>
        </div>
        <div class="form-group">
        <input class="form-control" type="text"  name="answers[]" required/>
        </div>
        <div class="form-group">
        <input class="form-control" type="text" name="answers[]" required/>
        </div>
        <div class="form-group">
        <input class="form-control" type="text" name="answers[]" required/>
        </div>
        <div class="append"></div>
        <div class="form-group">
            <button class="btn add-answer">Add Answer</button>  <button class="btn del-answer">Delete Answer</button>
        </div>
        <div class="form-group">
        <label for="correct">Correct answer</label>
        <input class="form-control" type="number" id="right_answer" name="right_answer" required/>
        </div>
        <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary js-submit" value="submit" />
        </div>
        </fieldset>
    </form>
   </div>
   <div class="container js-questions">
       
   </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/questions.js"></script>
</body>
</html>