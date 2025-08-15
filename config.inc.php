<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'koseli';

$conn = new mysqli($host, $username, $password, $database);

if(!$conn){
    die('Could not Connect MySql Server:' .mysqli_connect_error());
}
?>