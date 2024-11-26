<?php


$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'registrationorlogin';


$conn = new mysqli($host, $user, $pass, $db);
if($conn->connect_error){
    echo "failed to connect db".$conn->connect_error;
}


?>