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
      <nav>Rahul Srivastava</nav>
      <img src="images/pp.jpg" height="40px" usemap="#pp" />
      <map name="pp">
        <area shape="circle" coords="0,0,40" title="Rahul Shrivastava" />
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
    <span>
        <form action="create-quiz.php" method="get">
            <button type ="submit"  class="quiztemp">
                CREATE QUIZ
            </button>
        </form>
    </span>
    <span>
        <form action="marks.php" method="get">
            <button type ="submit"  class="quiztemp" style="margin-left:540px">
                CHECK MARKS
            </button>
        </form>
    </span>
    <div class="ad">
        <video height="700" autoplay muted>
          <source src="ad.mp4" />
        </video>
      </div>
    </div>
  </body>
</html>
