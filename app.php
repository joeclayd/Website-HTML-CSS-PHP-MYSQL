<!DOCTYPE html>



<?php
require_once "config.php";

$db = "applications";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$firstname =  trim( $_REQUEST['firstname']) ;
$lastname = trim( $_REQUEST['lastname']) ;
$email = trim( $_REQUEST['email']) ;
$file = trim( $_REQUEST['file']) ; 


$sql = "INSERT INTO apps (firstname, lastname, email, file)
VALUES (
    '$firstname', 
   '$lastname', 
   '$email',
   '$file')";

if ($conn->query($sql) === TRUE) {
  echo "Application Submitted";
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
  
  <h1> Dear <?php echo $firstname; ?>  </h1>

Thank you for applying to Enoxx.

I’d like to inform you that we received your application/resume. 
Our hiring team is currently reviewing all applications and we are planning 
to schedule interviews. If 
you are among qualified candidates, you will receive an email
from our one of our recruiters to schedule a interview. In 
any case, we will keep you posted on the status of your application.
  </h1>
  
  </div>
</div>


<h1>Return to Home</h1>



<button onclick="gohome();">Return To Home Page</button>

 
</body>
</html>