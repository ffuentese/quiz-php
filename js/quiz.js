function getQuestions(callback){


$.getJSON('../check_json_quiz.php', callback);

};

function renderJSON (result, index){
    return `<div id="question" class="form-group">
    <legend>${result.question}</legend>
    ${result.answers.map(function(item, i){
      return `<div class="form-check form-check-inline">
      <label for="answer" class="form-check-label">
      <input type="radio" class="form-check-input" name="answer-${index}" value="${i}" required>${item}</label>
      </div>`}).join('')}
     </div>`;
};

function displayQuestions(data){
    var results = '<form id="quiz" role="form"><fieldset>';
    results += data.map(function(item,index){
       return renderJSON(item, index); 
    }).join('');
    results += ' </fieldset> <div class="form-group"> ' +
    '<input type="submit" name="submit" class="btn btn-primary" value="Submit" /> </div>'
    + '  </form>  </div>';
    $('.js-quiz').html(results);
}

// form submit

function displayResult(data){
    var results = `<p>You had ${data} answers right!</p>`;
    $('.js-result').html(results);
}

function getAnswers(callback){
    $(document).on('submit', '#quiz', function(event){
        event.preventDefault();
         var ans = $("input[type=radio]:checked").each(function() {
            return $(this).val().value;
         });
         $.post("../quiz_eval.php", ans.serialize(), callback);
    })
}

$(function(){
    getQuestions(displayQuestions); 
    getAnswers(displayResult);
});