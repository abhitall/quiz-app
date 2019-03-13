    function showQuestions(questions, quizContainer, scoreContainer, colResName){
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("GET", "getquizresult.php?cn=" + colResName, true);
      xmlhttp.onreadystatechange = function () {
      if (xmlhttp.readyState == 4 && xmlhttp.status == "200") 
        scoreContainer.innerHTML ="your score is " + xmlhttp.responseText;
      };
        xmlhttp.send();
        var output = [];
        var answers;
        for(var i=0; i<questions.length; i++){
            answers = [];
            for(letter in questions[i].answers){
                answers.push(
                    '<label>'
                        + '<input type="radio" name="question'+i+'" value="'+letter+'">'
                        + letter + ': '
                        + questions[i].answers[letter]
                    + '</label>'
                );
            }
            output.push(
                '<div class="question">' + questions[i].question + '</div>'
                + '<div class="answers">' + answers.join('') + '</div>'
            );
        }
        quizContainer.innerHTML = output.join('');
    }


    function showResults(questions, quizContainer, resultsContainer, colResName){
        var answerContainers = quizContainer.querySelectorAll('.answers');
        var userAnswer = '';
        var numCorrect = 0;
        for(var i=0; i<questions.length; i++){
            userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;
            if(userAnswer===questions[i].correctanswer){
                numCorrect++;
                answerContainers[i].style.color = 'lightgreen';
            }
            else{
                answerContainers[i].style.color = 'red';
            }
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "quizresultupdate.php?cn=" + colResName + "&qr=" + numCorrect, true);
        xmlhttp.onreadystatechange = function () {
      if (xmlhttp.readyState == 4 && xmlhttp.status == "200") 
         resultsContainer.innerHTML = numCorrect + ' out of ' + questions.length;};
        xmlhttp.send();
    }

    function generateQuiz(colName, colResName){
      var request = new XMLHttpRequest();
      request.overrideMimeType("application/json");
      request.open('GET', 'quiz.json', true);
      request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == "200") {
      var questions = JSON.parse(request.responseText)[colName];
      var scoreContainer = document.getElementById('score');
      var quizContainer = document.getElementById('quiz');
      var resultsContainer = document.getElementById('results');
      var submitButton = document.getElementById('submit');
      showQuestions(questions, quizContainer, scoreContainer);
      submitButton.onclick = function(){
      showResults(questions, quizContainer, resultsContainer, colResName);
      }
    }
  }
  request.send();
}