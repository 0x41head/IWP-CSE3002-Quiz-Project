<html>

 <?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<?php
$sql = "SELECT * FROM quiz";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["quizID"]. " - Name: " . $row["question"]. " " . $row["option1"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 
</html>