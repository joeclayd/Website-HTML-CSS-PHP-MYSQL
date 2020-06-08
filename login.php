<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Womens</title>

    <link rel="stylesheet" href="enoxx.css">


    


</head>
<body>

    <div class="nav">

		<ul>
            
          
            <li><a href="contactus.html">Contact Us</a></li>
           <!-- <li><a href="cart.html">Place Order</a></li> -->
            <li><a class="active" href="login.php">Subscribe</a></li>
            <li><a href="accesories.html">Accesories</a></li>
            <li><a href="womens.html">Women</a></li>
            <li><a href="mens.html">Men</a></li>
            <li><a class="b" href="index.html">ENOXX</a></li>
            
            <!--<li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
                    <div class="dropdown-content">
                      <a href="#">Link 1</a>
                      <a href="#">Link 2</a>
                      <a href="#">Link 3</a>
                    </div>
                  </li>
                -->
        </ul>
<br>
    </div> <!--Nav bar-->



    <?php
$servername = "localhost";
$username = "root";
$password = "verysecret";
$dbname = "jc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 




?>




    
    <div class="sorry">
        <p>Please exuse our apperance the site is still in BETA</p>
    </div> <!--Put this in there for fun -->

    <div class="polaroid">
  
  <div class="container">
  
  <h1>Would you like to subscribe to recieve our latest news letters and offers?
  </h1>
  <img src="photos/acc3.jpeg" alt="Cute Pug" style="width:100%">
  
  </div>
</div>

    <div class="polaroid">
  
  <div class="container">
  
  <h1>Subscribe
  </h1>
  <form action="Submitemail.php" method="post">
    Firstname:<br> <input name="firstname" type="text" /><br />
    <br />
    Lastname: <br><input name="lastname" type="text" /><br />
    <br />
    Email: <br><input name="email" type="text" /><br />
    <br />
    <input name="Submit1" type="submit" value="submit" /><br />
    &nbsp;</form>
  </div>
</div>

<div class="polaroid">
  
  <div class="container">
  
  <h1>Unsubscribe
  </h1>
  <form action="unsubscribe.php" method="post">
    email: <input name="email" type="text" /><br />
    <br />
    <input name="Submit1" type="submit" value="submit" /><br />
    &nbsp;</form>
  </div>
</div>
</body>
</html>







</body>
</html>