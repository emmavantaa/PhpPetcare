
<?php
session_start()
?>
<?php
include_once "database/dbhandler.php"
?>
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.php">
    <title>Document</title>
</head>
<body style="background-color: #F7FCFF;">


<header>
<a href="index.php"><img src="img/PetCareLogo.png" style="margin-left: 20px;"> </a>
<div class="navbar">
  
<form method="GetName" style="margin-right:20px; float: right;">
<div class="navtext">
<a href="service.php" class="button" style="padding-right: 50px; text-decoration: none; ">Service</a> 
<a href="aboutus.php" class="button" style="padding-right: 50px; text-decoration: none;">About us</a> 

<br>
</div>
</div>

</form>

</header>

<container>
<div class="cta">
    <div class="textoverimg">
        <h1 style="font-family: Tahoma;">See our opening hours</h1>
<button class="specialbtn">Book now</button>
</div>
</div>

<img src="img/dog.jpg" alt="Dogo" style="width:1750px;height:800px"> 


</container>

<h5 name="user_firstname"></h5>

<div class="servicecardcontainer">
<container>

<div class="servicecards">
    <h4>For cats</h4>
</div>
<div class="servicecards">
    <h4>For dogs</h4>
</div>
<div class="servicecards">
    <h4>Other animals</h4>
</div>
</container>
</div>

<?php

$conn;
?>    

<footer>

<?php  
    if (isset($_SESSION['user_email'])){
        echo '<div class="alignright"> <form action="database/login.php" method="post">
        <button type="submit" name="login-submit">Logout</button>
        </form> </div>';
      
        }
        else{
            echo '<div class="alignright"><form action="database/login.php" method="post">
            <a href="login.php"<button type="submit" name="logout-submit">Login</button></a>
            </form></div>';
        }

 ?> 






<div class="alignleft" style="margin-left:20px"> 
<?php
if (isset($_SESSION['user_email'])){

echo '<p  class= "login-status"> You are logged in!</p>';
}
else{
    echo '<p  class= "login-status"> You are logged out!</p>';
}
?>
</div>

<div class="alignright" style="margin-right:20px; font-family: Tahoma;"> 
<?php
if (isset($_SESSION['user_email'])){
echo $_SESSION["user_email"];
}

?>
</div>
<div class="left-side">
    <p class="alignleft">Emma Vantaa 2021</p>
</div>
</footer>

</body>
</html>