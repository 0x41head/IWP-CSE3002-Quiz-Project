<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta
         name="viewport"
         content="width=device-width, initial-scale=1, shrink-to-fit=no"
         />
      <link
         rel="stylesheet"
         href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
         integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
         crossorigin="anonymous"
         />
      <link rel="stylesheet" href="css/quiz-style.css" />
      <div id="ques">
      <?php
         $servername = "localhost";
         $username = "root";
         $password = "password";
         $dbname = "project";
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
         }
         ?>
      <?php
         
         $sql = "SELECT * FROM quiz where quizID = ".$_GET["id"];
         $result = mysqli_query($conn, $sql);
         $val = 0;
         echo "[";
         if (mysqli_num_rows($result) > 0) {
           while($row = mysqli_fetch_assoc($result)) {
             $val+=1;
             echo "{\"question\": \"" . $row["question"]. "\" , \"choices\": [\"" . $row["option1"]. "\",\"" .  $row["option2"]. "\",\"".  $row["option3"]. "\",\"".  $row["option4"]. "\"],\"correct\":".$row["answer"]."}";
            if($val!=mysqli_num_rows($result)){
              echo ",";
            }
            }
         } 
         echo "]";
         ?> 
      </div>
      <div id ="qid" style="display: none;">
        <?php
           echo $_GET["id"];
           setcookie("qid", $_GET["id"], time() + (86400 * 30), "/");
         mysqli_close($conn);?>

        </div>
   </head>
   <main class="main">
      <body>
         <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
               <div class="box">
                  <div id="container">
                     <header class="row header">
                        <div class="heading">
                           <h2>Quiz Hub</h2>
                        </div>
                        <div class="col-sm-8">
                           <h1 id="qname"></h1>
                        </div>
                        <div class="col-sm-2">
                           <div class="rcorners">
                              Time Remaining: <span id="time-remaining">75</span>
                           </div>
                        </div>
                     </header>
                     <span class="line"></span>
                     <main class="main">
                        <div class="row">
                           <div id="question-field" class="col-md-6">
                              <div class="rcorners2">
                                 <h2 id="question-text">Question goes here</h2>
                              </div>
                              <p id="sub-heading"></p>
                              <button
                                 id="btn-start-quiz"
                                 class="btn btn-primary page-buttons"
                                 >
                              Start Quiz
                              </button>
                              <a href="./student-dashboard.php">
                              <button
                                 id="btn-goback"
                                 class="btn btn-primary page-buttons"
                                 >
                                 
                              Return to Dashboard
                              </button></a>
                           </div>
                        </div>
                        <div class="row">
                           <div id="answer-field" class="col-md-4">
                              <div class="row">
                                 <button id="btn-1" class="btn btn-outline-primary">
                                 btn1
                                 </button>
                              </div>
                              <br />
                              <div class="row">
                                 <button id="btn-2" class="btn btn-outline-primary">
                                 btn2
                                 </button>
                              </div>
                              <br />
                              <div class="row">
                                 <button id="btn-3" class="btn btn-outline-primary">
                                 btn3
                                 </button>
                              </div>
                              <br />
                              <div class="row">
                                 <button id="btn-4" class="btn btn-outline-primary">
                                 btn4
                                 </button>
                              </div>
                              <br />
                           </div>
                        </div>
                        <div class="row">
                           <div id="feedback" class="col-md-4">
                              <hr />
                              <h2 id="feedback-text"></h2>
                           </div>
                        </div>
                     </main>
                  </div>
               </div>
            </div>
         </div>
         <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"
            ></script>
         <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"
            ></script>
         <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"
            ></script>
         <script src= "js/script.js"></script>
         <title>Quiz</title>
      </body>
   </main>
</html>

