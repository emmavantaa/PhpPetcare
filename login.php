<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
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



<div class="servicecards" style="margin-top: 250px; margin-bottom:250px;">
<container style="text-align: center;">
<div class="textstyling">
<?php
if (isset($_SESSION['user_email'])){
echo '<div class="alignright">
<div class="alignleft" style="margin-left:20px;"><p  class= "login-status"> You are logged in!</p></div></div>';
}
else{
    echo '<div class="alignright"style="text-align: center";> 
    <p class= "login-status"> You are logged out!
    </p></div></div>';
}
?>
<div>
<?php  
    if (isset($_SESSION['user_email'])){
        echo '<div class="alignright"><form action="database/logout.php" method="post">
        <a href="index.php"><button type="submit" name="logout-submit">Logout</button></a>
        </form></div>';
        }
        else{
            echo '
            <form action="database/login.php" method="post">
                <input type="text" name="user_email" placeholder="email..">
                <input type="password" name="user_userpassword" placeholder="password..">
                <a href="index.php"> <button type="submit" name="login-submit">Login</button></a>

            </form>
            ';
        }

 ?> 
<p>Not registerd yet? <a href="createuser.php">Register now</a> </p>


</div>
</div>
</container>


</div>
<footer>


</div>


<div class="left-side">
    <p class="alignleft">Emma Vantaa 2021</p>


</div>
</footer>
</body>
</html>