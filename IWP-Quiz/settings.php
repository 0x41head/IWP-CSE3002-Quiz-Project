<?php

session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');
}

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
        console.log("oo");
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
      <img src="https://lh3.googleusercontent.com/proxy/7O2TeKtGymWFIe9J8Wf31UgqNxba_ou8cXYbT9UHsTXW0pj0OERG86IW7788mxF4gvMoAQcg-2nYh1vYyNK3ApDorXCld9DWIR1WeM7amKVTa_ztx5RzVqg" height="40px" usemap="#pp" />
      <map name="pp">
        <area shape="circle" coords="0,0,40" 
        title=<?php
            echo $_SESSION['username'];

          ?> />
      </map>
    </section>
    <div id="sbar" class="sidebar">
      <ol style="color: white; padding-top: 20px">
        <li><a href="dashboard.php">HOME</a></li>
        <li><a href="#">INSTRUCTIONS</a></li>
        <li><a href="#">RESULTS</a></li>
        <li><a href="profile.php">PROFILE</a></li>
        <li><a href="settings.php">SETTINGS</a></li>
        <li><a href="logout.php">LOG OUT</a></li>
      </ol>
    </div>
    <div class="box">
      <div class="topleft">
        <h1>Update Profile</h1>
      </div>
    

    <style>
        


        .input-field {
          max-width: 380px;
          width: 100%;
          background-color: #f0f0f0;
          margin: 10px 0;
          height: 55px;
          border-radius: 5px;
          display: grid;
          grid-template-columns: 15% 85%;
          padding: 0 0.4rem;
          position: relative;
        }

        .input-field i {
          text-align: center;
          line-height: 50px;
          color: #36394e;
          transition: 0.5s;
          font-size: 20px;
        }

        .input-field input {
          background: none;
          outline: none;
          border: none;
          line-height: 1;
          font-weight: 400;
          font-size: 20px;
          color: #36394e;
        }

        .input-field input::placeholder {
          color: #aaa;
          font-weight: 400;
        }
        .uform{
            overflow: hidden;
            margin-left: 150px;
            margin-top: 50px;
        }
        .label {
            font-size: 24px;
            margin:10px;
            margin-right:50px;
            margin-left:50px;
        }
        .selop {
          background: none;
          outline: none;
          border: none;
          line-height: 1;
          font-weight: 400;
          font-size: 20px;
          color: #36394e;
        }

        .input-field select {
          background: none;
          outline: none;
          border: none;
          line-height: 1;
          font-weight: 400;
          font-size: 20px;
          color: #36394e;
        }


        .btn {
         text-decoration: none;
         font-weight: 500;
         font-size: 17px;
         text-align: center;
         padding: 10px 20px;
         cursor: pointer;
         text-transform: uppercase;
         border-radius: 5px;
         display: inline-block;
         color: #fff;
         height: 45px;
         margin: 10px 0;
         background-image: linear-gradient(to right, #4458dc 0%, #854fee 100%);
         border: double 2px transparent;
         box-shadow: 0 10px 20px rgba(186, 171, 238, 0.3);
        }       

        .btn:hover {
         border: 2px solid #4458dc;
         color: #4458dc;
         background-color: #fff;
         box-shadow: none;
         background-image: none;
        }       
    </style>



        <form action="update.php" method="post" class="uform">
            <table border="0" cellspacing="20">
            <tr>
                <td><div class="label">Name</div></td>
                <td>
                    <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Name" id="usernames" 
                            value=" <?php
                            echo $_SESSION['username'];
                            ?> "
                            readonly
                    />
                    </div>
                </td>
            </tr>
            <tr>
                <td><div class="label">Email</div></td>
                <td>
                <div class="input-field">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="email" placeholder="Email" id="emails" 
                  value=" <?php echo $_SESSION['email']; ?> " readonly />
                </div>
                </td>
            </tr>
            <tr>
            <td><div class="label">Age</div></td>
                <td>
                <div class="input-field">
                  <i class="fas fa-envelope"></i>
                  <input type="number" id="age" name="age" placeholder="0" required>
                </div>
                </td>
            </tr>
            <tr>
                <td><div class="label">Gender</div></td>
                <td>
                <div class="input-field">
                  <i class="fas fa-envelope"></i>
                  <select id="gender" name="gender" unselected>
                    <option value="Male" class="selop">Male</option>
                    <option value="Female" class="selop">Female</option>
                  </select>
                </div>
                </td>
            </tr>
            <tr>
                <td><div class="label">Contact</div></td>
                <td>
                <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="tel" id="phone" name="phone" placeholder="9999999999" pattern="[0-9]{10}" required>
                </div>
               
                </td>
            </tr>
            <tr>
                <td><div class="label">Profession</div></td>
                <td>
                <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="text" name="profession" placeholder="Student" id="profession" required />
                </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <button type="submit" class="btn" >Submit</button>
                </td>
            </tr>
            </table>
        
         </form>



      
    </div>
  </body>
</html>
