<?php
 session_start();
 if ($_SESSION['is_Logged']==true)
 {
     
 }
else
{
     header('Location: index.php');
}