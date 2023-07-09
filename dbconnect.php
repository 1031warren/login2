<?php

$server_name = "localhost";
$user_name = "id20738323_csc356";
$password = "N0Acceess!";
$db_name = "id20738323_csc356";

$conn = mysqli_connect($server_name, $user_name, $password, $db_name);

if(!$conn){
    echo "Connection failed!";
}
?>
