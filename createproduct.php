<?php
session_start();
require 'database/connection.php';

if($_SERVER['REQUEST_METHOD']==="POST"){
    $pdname = $_POST['name'];
    $pdprice = $_POST['price'];
    $pddesc = $_POST['desc'];
    $user_id = $_SESSION['user_id'];

    $targetdir = 'productimg/';

    $uploadedFile = $_FILES['pdimg'];

    $filepath = $targetdir.basename($uploadedFile['name']);
    // print_r($uploadedFile);
    if(!empty($filepath)){
        $uploaded = move_uploaded_file($uploadedFile['tmp_name'], $filepath);
        
        if($uploaded){
            $sql = "INSERT INTO products (product_name, product_desc, product_price, image_url, user_id) VALUES ('$pdname', '$pddesc', '$pdprice', '$filepath', '$user_id') ";

            if($conn->query($sql)){?>
            <h1>Congratulations! your product has been listed on furni</h1>
            <?php
            }else{
                echo "product not created";
            }
        }else{
            echo "product img is not uploading";
        }

    }


}



?>