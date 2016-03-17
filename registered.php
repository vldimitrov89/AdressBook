<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username != 'root' && $password != '12345')
{
    echo "Your Username and Password are invalid!<br>";
    echo "<a href='login.php'>Try Again</a>";
    die();
}

 $_SESSION['is_Logged'] = true;
    header('Location: index.php');
