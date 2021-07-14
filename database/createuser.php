<?php
if (isset($_POST['submit-user']))
{

require 'dbhandler.php';

$user_firstname = $_POST['user_firstname'];
$user_lastname = $_POST['user_lastname'];
$user_email = $_POST['user_email'];
$user_phonenumber = $_POST['user_phonenumber'];
$user_userpassword = $_POST['user_userpassword'];
$user_userpassword_repeat = $_POST['user_userpassword_repeat'];

if (empty($user_firstname) || empty($user_lastname) || empty($user_email) || empty($user_phonenumber) || empty($user_userpassword) || empty($user_userpassword_repeat))
{
header("Location: ../createuser.php?error=emptyfield&user_firstname=".$user_firstname. "&mail=".$user_email);
exit();
}

else if (!filter_var($user_email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $user_firstname))
{
    header("Location: ../createuser.php?error=invaliduser_email");
    exit();
}

else if (!filter_var($user_email, FILTER_VALIDATE_EMAIL))
{
    header("Location: ../createuser.php?error=invalidmail&user_name=".$user_firstname);
    exit();
}

else if (!preg_match("/^[a-zA-Z0-9]*$/", $user_firstname))
{
    header("Location: ../createuser.php?error=invaliduserfirst_name&user_email=".$user_email);
    exit();
}

else if (!preg_match("/^[a-zA-Z0-9]*$/", $user_lastname))
{
    header("Location: ../createuser.php?error=invaliduserlastname=".$user_lastname);
    exit();
}


else if ($user_userpassword !== $user_userpassword_repeat)
{
    header("Location: ../createuser.php?error=Passwordcheck&useremail=".$user_firstname. "&mail=".$user_email);
    exit();
}

else {
    $sql = "SELECT firstname FROM users WHERE firstname=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
    header("Location: ../createuser.php?error=sqlerror1");
    exit();
    }

    else
    {
     mysqli_stmt_bind_param($stmt, "s", $user_firstname);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_store_result($stmt);
     $restultCheck = mysqli_stmt_num_rows($stmt);
if ($restultCheck > 0)
{
    header("Location: ../createuser.php?error=usertaken&useremail=".$user_email);
    exit();
}

else
{
    $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, userpassword) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
    header("Location: ../createuser.php?error=sqlerror2");
    exit();
    }

    else
    {
        $hashedpassword = password_hash($user_userpassword, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sssss", $user_firstname,$user_lastname, $user_email, $user_phonenumber, $hashedpassword);
        mysqli_stmt_execute($stmt);
        header("Location: ../createuser.php?success=successfullyregisterd");
        exit();
    }
}

}


}

}