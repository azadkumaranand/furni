<?php
session_start();
/*
echo $_SERVER['SCRIPT_NAME'];
ECHO "<br>";

*/

//basename ke madad se last wala file nikalenge

$current_file = basename($_SERVER['SCRIPT_NAME']);
/*
echo "you file path: ";
var_dump(basename('C:\xampp1\htdocs\furni'));
echo "<br>";
var_dump($current_file);
*/


// var_dump($is_true);

?>
<style>
    .loginbtn{
        background: #316478;
        border-radius: 10px;
        border: none;
        color: white;
        padding: 4px 12px 4px 13px;
        font-weight: 600;
    }
    .signbtn{
        background: rgb(210, 210, 89);
        border-radius: 10px;
        border: none;
        color: white;
        padding: 3px 12px 3px 12px;
        font-weight: 600;
    }
</style>
<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

<div class="container">
    <a class="navbar-brand" href="index.html">Furni<span>.</span></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
            <li class="<?php echo ($current_file == 'index.php'?'active nav-item':'nav-item' )?>">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="<?php echo ($current_file == 'shop.php'?'active nav-item':'' )?>" ><a class="nav-link" href="shop.php">Shop</a></li>
            <li class="<?php echo ($current_file == 'about.php'?'nav-item active':'' )?>" ><a class="nav-link" href="about.php">About us</a></li>
            <li class="<?php echo ($current_file == 'service.php'?'nav-item active':'' )?>" ><a class="nav-link" href="services.php">Services</a></li>
            <li class="<?php echo ($current_file == 'blog.php'?'nav-item active':'nav-item' )?>" ><a class="nav-link" href="blog.php">Blog</a></li>
            <li class="<?php echo ($current_file == 'contact.php'?'nav-item active':'nav-item' )?>" ><a class="nav-link" href="contact.php">Contact us</a></li>
        </ul>

        <ul class="d-flex  mb-md-0" style="list-style: none;">
            <li style="padding: 0px 5px 0px 5px"><button  data-bs-toggle="offcanvas" data-bs-target="#myaccount" aria-controls="myaccount">My Account</button></li>
        </ul>
    </div>
</div>
  
</nav>

<!-- End Header/Navigation -->

<!--off cnavas start -->

<div class="offcanvas offcanvas-start" tabindex="-1" id="myaccount" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel"><?php echo $_SESSION['user_name']; ?> <li style="padding: 0px 5px 0px 5px"><a href="logout.php"><button type="button" class="signbtn">Logout</button></a></li></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Dropdown button
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div>
<!--off cnavas end -->