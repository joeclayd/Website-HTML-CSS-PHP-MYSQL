<!DOCTYPE html>



<?php
require_once "config.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$firstname =  trim( $_REQUEST['firstname']) ;
$lastname = trim( $_REQUEST['lastname']) ;
$email = trim( $_REQUEST['email']) ;

$sql = "INSERT INTO user (firstname, lastname, email)
VALUES (
    '$firstname', 
   '$lastname', 
   '$email')";

if ($conn->query($sql) === TRUE) {
  echo "Email Submitted";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
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
  
  <h1> congratulations! You are on the list!
  </h1>
  <img src="photos/welcome.jpg" alt="Welcome" style="width:100%">
  </div>
</div>


<h1>Return to Home</h1>



<button onclick="gohome();">Return To Home Page</button>

 
</body>
</html>