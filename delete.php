<?php

session_start();
if ($_SESSION['is_Logged'] == true) {
    $people = file('data.txt');
    $count = count($people);
    $name = $_POST['name'];
    $new_data = array();
    foreach ($people as $person) {
        $record = explode(";", $person);
        $record_name = explode(":", $record[0]);
        
        if (end($record_name) == $name) {
            continue;
        }
        
        array_push($new_data, $person);
    }
    
    $handle = fopen('data.txt', 'w');
    foreach ($new_data as $row) {
        fwrite($handle, $row);
    }
    fclose($handle);
    header('Location:adressbook.php');
}

