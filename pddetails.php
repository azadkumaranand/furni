
<?php 
require 'database/connection.php';
$product_id = $_GET['id'];
?>

<?php
    $sql = "SELECT * FROM products WHERE product_id = '$product_id'";
    $result = $conn->query($sql);
    $row1 = $result->fetch_assoc();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title><?php echo $row1['product_name']; ?></title>
</head>
<style>
    .container1{
        display: flex;
    }
    .imagebox{
        width: 50%;
    }
    .aboutpd{
        width: 50%;
    }
    .container1:nth-child(1) img {
        
    }
</style>
<body>
    <?php //print_r($row1) ?>
    <?php include 'header.php' ?>
    
    <div class="container1">
        <div class="imagebox">
            <img src="<?php echo $row1['image_url']; ?>" style="width: 100%;
        height: 80vh;" alt="">
        </div>
        <div class="aboutpd">
            <h3><?php echo $row1['product_name']; ?></h3>
            <p><?php echo $row1['product_desc']; ?></p>
        </div>
    </div>
</body>
</html>