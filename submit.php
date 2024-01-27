<?php
require 'database/connection.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$folder = "profilephoto/";
$path = $folder . $_FILES["file"]["name"];
$temp = $_FILES["file"]["tmp_name"];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

if ($_FILES["file"]["size"] < 1024000) {
    move_uploaded_file($temp, $path);
} else {
    echo "<h2 style='color:red;'>img size should bee leas than 1mb</h2>";
}

$img_url = $path;

$sql = "INSERT INTO users (name, email, phone, password, image_url) VALUES ('$name', '$email', '$phone', '$pass', '$img_url')";

if($conn->query($sql)){
    echo "User created successfully";
}else{
    echo "something went wrong";
}

?>