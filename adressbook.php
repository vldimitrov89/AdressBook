<?php

echo "<a href='logout.php'>Logout</a> | <a href='add.php'>Add</a>";

$people = file('data.txt');
echo "<table border='1'>"
 . "<tr><td>Name</td><td>Email</td><td>Phone</td></tr>";

foreach ($people as $value) {
 echo "<tr>";
    $tmp = explode(';', $value);
    foreach ($tmp as $v) {
        $tmp2 = explode(':', $v);
        echo "<td>" . end($tmp2) . "</td>";
    }
 echo "</tr>";
}
echo "</table>";



