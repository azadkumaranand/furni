<?php

$servername = "localhost";
$username = "root";
$password = '';
$databasename = "furni";

$conn = new mysqli($servername, $username, $password, $databasename);
echo "<pre>";
// var_dump($conn);
// print_r($conn);
echo "</pre>";

/*
var_dump($conn->connect_errno);
if($conn->connect_errno>0){
    echo "<h1>something went wrong connection unsuccessfull</h1>";
}else{
    echo "<h1>connection successfull</h1>";
}

if(empty($conn->connect_error)){
    echo "<h1>connection successfull</h1>";
}else{
    echo "<h1>something went wrong connection unsuccessfull</h1>";
}
*/
if($conn->connect_errno>0){
    echo "<h1>something went wrong connection unsuccessfull</h1>";
}
/*
$sql = "CREATE DATABASE furni";
//query is a method inside mysqli class
$conn->query($sql);
*/
?>