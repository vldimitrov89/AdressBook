<?php

echo "<a href='logout.php'>Logout</a> | <a href='add.php'>Add</a>";

$people = file('data.txt');
echo "<table border='1'>"
 . "<tr><td>Name</td><td>Email</td><td>Phone</td></tr>";

foreach ($people as $value) {
    $tmp = explode(';', $value);
    foreach ($tmp as $v) {
        $tmp2 = explode(':', $v);
        if ($tmp2[0] == 'name') {
            $name = $tmp2[1];
        } elseif ($tmp2[0] == 'email') {
            $email = $tmp2[1];
        } elseif ($tmp2[0] == 'phone') {
            $phone = $tmp2[1];
        }
        
    }
    echo "<tr><td>" . $name . "</td><td>" . $email . "</td><td>" . $phone . "</td></tr>";
}

echo "</table>";



