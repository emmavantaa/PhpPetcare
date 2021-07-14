<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.php">
   <title>login/register</title>

</head>
<body style="background-color: #F7FCFF;">
<header>
<a href="index.php"><img src="img/PetCareLogo.png" style="margin-left: 20px;"> </a>
<div class="navbar">
  
<form method="GetName" style="margin-right:20px; float: right;">
<div class="navtext">
<a href="login.php" class="button" style="padding-right: 50px; text-decoration: none; ">Service</a> 
<a href="login.php" class="button" style="padding-right: 50px; text-decoration: none;">About us</a> 

<br>
</div>
</div>

</form>


</header>

<container>
    <div>
<div class="containerbox">
<h4> Register as a new user</h4>

<div class="alightright">
<form action="database/createuser.php"  method="POST" >
<p>First name</p>
    <input type="text" name="user_firstname" placeholder="Firstname">
    <br>
    <br>
    <input type="text" name="user_lastname" placeholder="Lastname">
    <br>
    <br>
    <input type="text" name="user_email" placeholder="Email">
    <br>
    <br>
    <input type="text" name="user_phonenumber" placeholder="Phonenumber">
    <br>
    <br>
    <input type="password" name="user_userpassword" placeholder="Password">
    <br>
    <br>
    <input type="password" name="user_userpassword_repeat" placeholder="Repeat password">
    <br>
    <br>

    <button type="submit" name="submit-user" class="specialbtn"> Register</button>
 
</form>
</div>
</div>
</div>
</container>

<footer>
<div class="left-side">
    <p class="alignleft">Emma Vantaa 2021</p>
    <div class="alignright">
    <a href="login.php"><button class="basicbutton" style="float: right;" >Login </a></button></a>
    </div>
    </div>
</footer>
</body>
</html>