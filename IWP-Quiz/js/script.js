var timeRemaining = document.getElementById("time-remaining");
var ques = document.getElementById("ques");
var questionField = document.getElementById("question-field");
var questionText = document.getElementById("question-text");
var subHeadding = document.getElementById("sub-heading");
var btnStartQuiz = document.getElementById("btn-start-quiz");
var btn1 = document.getElementById("btn-1");
var btn2 = document.getElementById("btn-2");
var btn3 = document.getElementById("btn-3");
var btn4 = document.getElementById("btn-4");
var quizname = document.getElementById("qname");
var answerField = document.getElementById("answer-field");
var feedback = document.getElementById("feedback");
var feedbackText = document.getElementById("feedback-text");
var qID = document.getElementById("qid");
var gb = document.getElementById("btn-goback");
var score=0;
var quiz = {
    questions: JSON.parse(ques.textContent),
    index: 0, 
    correctAnswerText: "",
    timeLeft: 0, 
    quizStopped: false, 

    runQuizTimer: function () {
        this.timeLeft = 75;
        this.quizStopped = false;
        var timerInterval = setInterval(function () {
            if (this.quizStopped) {
                clearInterval(timerInterval);
                return;
            }
            this.timeLeft--;
            timeRemaining.textContent = this.timeLeft;
            
            if (this.timeLeft < 1) {
                
                clearInterval(timerInterval);
            }
        }.bind(this), 1000); 
    },

    populateQuestion: function () {
        if (this.index < this.questions.length) {
            var currQuestion = this.questions[this.index];
            questionText.textContent = currQuestion.question;
            btn1.textContent = currQuestion.choices[0];
            btn2.textContent = currQuestion.choices[1];
            btn3.textContent = currQuestion.choices[2];
            btn4.textContent = currQuestion.choices[3];
            
            this.correctAnswerText = currQuestion.choices[currQuestion.correct];
            this.index++;
        }

    },

    determineAnswer: function (event) { //Checking Answers for quiz
        if (event.target.nodeName === "BUTTON") {
            var userAnswerText = event.target.innerText.toString();
            if (userAnswerText === this.correctAnswerText) {
                
                feedback.style.display = "block";
                feedbackText.textContent = "Correct!";
                score+=1;
            } else { 
               
                feedback.style.display = "block";
                feedbackText.textContent = "Wrong!";
            }
            setTimeout(function(){ feedback.style.display = "none"; }, 1000); 
            if (this.index > this.questions.length - 1) {
                this.quizStopped = true;
                this.newHighscore();
            } else {
                this.populateQuestion();
            }
        }
    },

    newHighscore: function () {
        questionText.textContent = "Quiz Complete!";
        subHeadding.textContent = "Your final score is: " + score+" !";
        subHeadding.style.display = "block";
        answerField.style.display = "none";
        feedback.style.display = "none";
        gb.style.display = "block";
        createCookie("score", score, "1");
        

    }
    
};
function createCookie(name, value, days) {
    var expires;
      
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
      
    document.cookie = escape(name) + "=" + 
        escape(value) + expires + "; path=/";
}
document.addEventListener("DOMContentLoaded", function (event) {
    questionText.textContent = "QUIZ #"+qID.textContent;
    subHeadding.innerHTML = "<ul><li><p>The quiz contains multiple choice questions out of which only one option is correct</p></li><li><p>Timer of the quiz will be displayed at the top of each question</p></li><li><p>Results will be shown after submission</p></li><li><p>Each question has four options</p></li><li><p>For each correct answer, 1 mark will be awarded</p></li><li><p>There is no negative marking</p></li></ul>";
    gb.style.display = "none";

    btnStartQuiz.addEventListener("click", function (event) {
        event.preventDefault();
        subHeadding.style.display = "none";
        btnStartQuiz.style.display = "none";
        answerField.style.display = "block";
        quiz.populateQuestion();
        quiz.runQuizTimer();
        qname.textContent="QUIZ #"+qID.textContent;
        
    });

    answerField.addEventListener("click", function (event) {
        quiz.determineAnswer(event);
    });

});



