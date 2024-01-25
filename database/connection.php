<?php

$servername = "localhost";
$username = "root";
$password = '';
$databasename = "";

$conn = new mysqli($servername, $username, $password, $databasename);
echo "<pre>";
print_r($conn);
echo "</pre>";

if(empty($conn->connect_error)){
    echo "<h1>connection successfull</h1>";
}else{
    echo "<h1>something went wrong connection unsuccessfull</h1>";
}


?>