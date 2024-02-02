<?php
session_start();
include "database/connection.php";
// $_SESSION["product"][] = [];
    if($_SERVER['REQUEST_METHOD']=="POST"){
      $product_id = $_POST['product'];
      echo $product_id;
      $sql_query = "SELECT * FROM products WHERE product_id = '$product_id'";
      $result = $conn->query($sql_query);

      $_SESSION["product"][] = $result->fetch_assoc();
      // echo "hell";
      
    }
    unset($_SESSION["produc"][1]);
    echo "<pre>";
      print_r($_SESSION["product"]);
      echo "</pre>";
      $cart_length = count($_SESSION["product"]);
    for($i=0; $i<count($_SESSION['product']); $i++){
        echo $i."<br>";
        echo $_SESSION["product"][0]['product_name'];
    }
?>