<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />
  </head>
  <script>
    function navtoggle() {
      bar = document.getElementById("sbar");
      if (bar.style.display != "block") {
        bar.style.display = "block";
      } else {
        bar.style.display = "none";
      }
    }
  </script>
  <body>
    <section class="navsection">
      <button onclick="navtoggle()" class="hamburger">☰</button>
      <div class="logo">
        <h1>Quiz Hub</h1>
      </div>
      <nav>
        <?php
          echo $_SESSION['username'];

        ?>
      </nav>
      <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Circle-icons-profile.svg" height="40px" usemap="#pp" />
      <map name="pp">
        <area shape="circle" coords="0,0,40" 
        title=<?php
            echo $_SESSION['username'];

          ?> />
      </map>
    </section>
    <div id="sbar" class="sidebar">
      <ol style="color: white; padding-top: 20px">
        <li><a href="#">HOME</a></li>
        <li><a href="./instructions.php">INSTRUCTIONS</a></li>
        <li><a href="#">RESULTS</a></li>
        <li><a href="#">SETTINGS</a></li>
        <li><a href="#">LOG OUT</a></li>
      </ol>
    </div>
    <div class="box">
      <div class="topleft">
        <h1>Dashboard</h1>
      </div>
      <?php
         $servername = "localhost";
         $username = "root";
         $password = "password";
         $dbname = "project";
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
         }
         $marks=0;
         ?>
      <?php
      if(isset($_COOKIE["qid"])){
        $sql = "UPDATE marks set marks = ".$_COOKIE["score"]." where quizid = ".$_COOKIE["qid"];
        $marks = $_COOKIE["score"] ;
        $result = mysqli_query($conn, $sql);
        unset($_COOKIE["qid"]);
        unset($_COOKIE["score"]);
        setcookie("qid", "", time() - 3600, "/");
        setcookie("score", "", time() - 3600, "/");
        }
         $sql2 = "SELECT * FROM marks where userid =".$_SESSION["id"];
         $result2 = mysqli_query($conn, $sql2);
         $val2 = 0;
          
         if (mysqli_num_rows($result2) > 0) {
          while($row = mysqli_fetch_assoc($result2)) {
            if($row["marks"]==-1){
            echo"<span>
            <form action=\"quiz-template.php\" method=\"get\">
              <input type=\"hidden\" name=\"id\" value=\"".$row["quizid"]."\">
              <button type =\"submit\"  class=\"quiztemp\" ";
              if($val2==1){echo "style=\"margin-left: 540px;\"";}
              if($val2==2){echo "style=\"margin-left: 980px;\"";}
              echo ">QUIZ#".$row["quizid"]."</br></br> <h6>To Start!</h6></br></button></form></span>";
            }
            else{
              echo"<span>
              <input type=\"hidden\" name=\"id\" value=\"".$row["quizid"]."\">
              <button type =\"submit\"  class=\"quizcomp\" ";
              if($val2==1){echo "style=\"margin-left: 540px;\"";}
              if($val2==2){echo "style=\"margin-left: 980px;\"";}
              echo ">QUIZ#".$row["quizid"]."</br></br> <h6>Completed!</br>Marks :".$row["marks"]."</h6></br></button></span>";
            }
            $val2=$val2+1;
          }
         }
         mysqli_close($conn);
         ?> 
    

      <div class="ad">
        <video height="700" autoplay muted>
          <source src="ad.mp4" />
        </video>
      </div>
    </div>
  </body>
</html>
