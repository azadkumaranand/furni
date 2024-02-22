<?php
require "database/connection.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $product_id = $_POST['pd_id'];

    $sql = "DELETE FROM products WHERE product_id = '$product_id'";

    $result = $conn->query($sql);
    if($result){
        header('Location: index.php');
    }else{
        echo "something went wrong";
    }
    
}

?>