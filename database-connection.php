<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_login-form";

$conn = mysqli_connect($servername , $username , $password , $dbname);

if($conn){
    // echo "Connected successfully";
}
else{
    echo "Connection failed".mysqli_connect_error();
}














?>