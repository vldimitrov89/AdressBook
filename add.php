<?php
 session_start();
 if ($_SESSION['is_Logged']==true)
 {
     var_dump($_POST);
     if(isset($_POST['name']))
     {
         $name = trim($_POST['name']);
         $email = trim($_POST['mail']);
         $phone = trim($_POST['phone']);
         if(strlen($name)>3 && strlen($email)>5)
         {
             $tmp='name:'.$name.';email:'.$email.';phone:'.$phone.';';
             file_put_contents('data.txt', $tmp."\r\n",FILE_APPEND);
             echo 'Data saved!';
         }
         else
         {
             echo 'Wrong data!';
         }
     }
     ?>
<form action="add.php" method="post">
    Name:<input type="text" name="name" /><br>
    Email:<input type="text" name="mail" /><br>
    Phone:<input type="text" name="phone" /><br>
    <input type="submit" value="Add" />
</form>
<a href="adressbook.php">Back</a>
<?php
 }
else
{
     header('Location: index.php');
}