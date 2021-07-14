<?php

if (isset($_POST['login-submit'])){
require 'dbhandler.php';

$user_email = $_POST['user_email'];
$user_userpassword = $_POST['user_userpassword'];

if(empty($user_email) || empty($user_userpassword))
{
    header("Location: ../login.php?error=emptyfieldfields");
    exit();
}

else{
    $sql = "SELECT * FROM users WHERE email=?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("Location: ../login.php?error=sqlerror");
        exit();
    }

    else{
mysqli_stmt_bind_param($stmt, "s", $user_email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

 if ($row = mysqli_fetch_assoc($result)){
$passwordCheck = password_verify($user_userpassword, $row['userpassword']);
if ($passwordCheck == false){
    header("Location: ../login.php?error=wrongpassword");
    exit();
}
else if ($passwordCheck == true){
session_start();
$_SESSION['user_email'] = $row['email']; // id and email
$_SESSION['user_userpassword'] = $row['userpassword'];

header("Location: ../index.php?login=userloggedinsuccessfully");
exit();
}
else
{
    header("Location: ../login.php?error=erroroccured");
    exit();

}

 }
 else
 {
    header("Location: ../login.php?error=userdoesnotexist");
    exit();
 }
}
}

}

else{
    header('Location: ../index.php');
    exit();
}