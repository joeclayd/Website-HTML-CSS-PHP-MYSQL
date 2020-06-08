<!DOCTYPE html>

<?php


require_once "config.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$email = trim( $_REQUEST['email']) ;
$sql = "DELETE FROM user WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
  echo "Unsubscribe succesful";
} else {
  echo "Error unsubscribing: " . $conn->error;
}

$conn->close();
?>

<html>
<head>
<script src="enoxx.js"></script>
</head>


<body>

<div class="polaroid">
  
  <div class="container">
  
  <h1> We hate to see you go. You are always welcome back!
  </h1>
  <img src="photos/bye.jpg" alt="Norther Lights" style="width:100%">
  </div>
</div>
<h1>Return to Home</h1>



<button onclick="gohome();">Return To Home Page</button>

 
</body>
</html>