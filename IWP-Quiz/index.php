<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
  <a name="home"></a>
    <header>
      <section class="navsection">
        <div class="logo">
          <h2>Quiz Hub : An Online Quiz Web Application</h2>
        </div>
        <nav>
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#instr">Instructions</a>
          <a href="login.php" target="_blank">Dashboard</a>
          <a href="#feed">Feedback</a>
          <a href="#cont">Contact</a>
        </nav>
      </section>
      <main>
        <div class="leftside">
          <h4>Welcome to</h4>
          <h1>Quiz Hub</h1>
          <h2>Learn. Practice. Assess.</h2>
          <br />
          <a href="login.php" target="_blank" class="btn">Get Started</a>
        </div>
        <div class="rightside">
          <img src="images/speed_test.svg" alt="speed_test" />
        </div>
      </main>
    </header>
    <a name="about"></a>
    <div class="curved">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#92acd3"
          fill-opacity="1"
          d="M0,160L26.7,186.7C53.3,213,107,267,160,266.7C213.3,267,267,213,320,208C373.3,203,427,245,480,261.3C533.3,277,587,267,640,224C693.3,181,747,107,800,90.7C853.3,75,907,117,960,160C1013.3,203,1067,245,1120,218.7C1173.3,192,1227,96,1280,96C1333.3,96,1387,192,1413,240L1440,288L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"
        ></path>
      </svg>
      
      <h1>About</h1>
      <p>
        <img src="images/team_work_k80m.svg" alt="speed_test" class="imgshow" />
        An online quiz portal enabling users to create and/or give quizzes. We
        aim to create a real time Quiz Web Application which is user friendly,
        attractive and add features like timers, difficulty levels and result
        analysis to make the portal more flexible and efficient. An online quiz
        portal enabling users to create and/or give quizzes. We aim to create a
        real time Quiz Web Application which is user friendly, attractive and
        add features like timers, difficulty levels and result analysis to make
        the portal more flexible and efficient. An online quiz portal enabling
        users to create and/or give quizzes. We aim to create a real time Quiz
        Web Application which is user friendly, attractive and add features like
        timers, difficulty levels and result analysis to make the portal more
        flexible and efficient.
      </p>
    </div>
    <br /><br />
    <a name="instr"></a>
    <div class="break"></div>
    <div class="instr">
      <div class="container">
        <h2>Instructions :</h2>
        <ul type="disc">
          <li>
            <p>
              The quiz contains multiple choice questions out of which only one
              option is correct
            </p>
          </li>
          <li>
            <p>
              Timer of the quiz will be displayed at the top of each question
            </p>
          </li>
          <li><p>Results will be shown after submission</p></li>
          <li><p>Each question has four options</p></li>
          <li><p>For each correct answer, 1 mark will be awarded</p></li>
          <li><p>There is no negative marking</p></li>
        </ul>
      </div>
    </div>
    <a name="feed"></a>
    <div class="break"></div>
    <img src="images/message_sent_1030.svg" alt="" class="imgfeed" />
    <div class="feed">
      <div class="feedback">
        <h1>Give your Feedback</h1>
        <form action="feed.php" method="post">
          <input type="text" class="input-field" name="name" placeholder="Your Name" />
          <input type="email" class="input-field" name="email" placeholder="Your Email" />
          <input type="text" class="input-field" name="subject" placeholder="Subject" />
          <textarea
            type="text"
            class="text-field"
            placeholder="Your Message"
            name="message"
          ></textarea>
          <br /><br />
          <button class="btn1" onclick='alert("Feedback submitted successfully")'>Submit</a>
        </form>
      </div>
    </div>
    <div class="break"></div>
    <a name="cont"></a>
    <div class="foot">
      <footer class="footer">
        <div class="con">
          <div class="row">
            <div class="footer-col">
              <h4>Contact Us</h4>
              <ul>
                <li><a href="#">+91 99775 99775</a></li>
                <li><a href="#">+91 55664 55664</a></li>
                <li><a href="#">quizhub@gmail.com</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Address</h4>
              <ul>
                <div class="add">
                  C-521 <br />GTB Nagar<br />Prayagraj<br />Uttar Pradesh
                </div>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Quick links</h4>
              <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="login.php" target="_blank">Dashboard</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="login.php" target="_blank">Get Started</a></li>
                <li><a href="#instr">Instructions</a></li>
              </ul>
            </div>

            <div class="footer-col">
              <h4>Follow Us</h4>
              <div class="social-links">
                <a href="#"
                  ><i class="fa fa-facebook-official" aria-hidden="true"></i
                ></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"
                  ><i class="fa fa-instagram" aria-hidden="true"></i
                ></a>
                <a href="#"
                  ><i class="fa fa-youtube-play" aria-hidden="true"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <p class="copyright">All rights reserved. Quiz Hub © 2021</p>
      </footer>
    </div>
  </body>
</html>
