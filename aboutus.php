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




<div class="servicecardcontainer">
<container style="text-align: center;">
<div class="textstyling">
<h3>About us</h3>
<p>We are a small local company located west from Wrexham.</p>
<p>Our doors oppened up in 1993, after Alica Brook realized </p>
<p> there was a lack of care centers for pets.</p><br><br>
<p>We are masters of our traids and our speciallity is</p>
<p>making pets feel comfotrable even when they are left with us.</p>
<p>Pets at our care will be getting owners wished food, warm bed</p>
<p>and a safe space to relax the whole stay.</p><br>
</div>
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
            <a href="login.php"<button type="submit" class="basicbutton" name="logout-submit">Login</button></a>
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
</div>
<div class="left-side">
    <p class="alignleft">Emma Vantaa 2021</p>
    <div class="alignright">
    </div>


</div>
</footer>
</body>
</html>