<?php
session_start();

$link = ($_SESSION['is_Logged']==true)? "addressbook.php" : "login.php";

header('Location: $link');
