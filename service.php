<?php
include_once "database/dbhandler.php"
?>

<?php
session_start()

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
<container>

<div class="servicecards">
    <div>

    <h4 class="textstyling">For cats</h4>
    <p class="textstyling"></p>

    </div>
</div>
<div class="servicecards">
<div>

<h4 class="textstyling">For dogs</h4>
    <p class="textstyling"></p>
</div></div>

<div class="servicecards">
<h4 class="textstyling">Other animals</h4>
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


</div>
<div class="left-side">
    <p class="alignleft">Emma Vantaa 2021</p>
    <div class="alignright">

    </div>


</div>
</footer>

</body>
</html>