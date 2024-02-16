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
.loginbtn {
    background: #316478;
    border-radius: 10px;
    border: none;
    color: white;
    padding: 4px 12px 4px 13px;
    font-weight: 600;
}

.signbtn {
    background: rgb(210, 210, 89);
    border-radius: 10px;
    border: none;
    color: white;
    padding: 3px 12px 3px 12px;
    font-weight: 600;
}
.profileimg img{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  border: 2px solid #3b5d50;
}
</style>
<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="index.html">Furni<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
            aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="<?php echo ($current_file == 'index.php'?'active nav-item':'nav-item' )?>">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="<?php echo ($current_file == 'shop.php'?'active nav-item':'' )?>"><a class="nav-link"
                        href="shop.php">Shop</a></li>
                <li class="<?php echo ($current_file == 'about.php'?'nav-item active':'' )?>"><a class="nav-link"
                        href="about.php">About us</a></li>
                <li class="<?php echo ($current_file == 'service.php'?'nav-item active':'' )?>"><a class="nav-link"
                        href="services.php">Services</a></li>
                <li class="<?php echo ($current_file == 'blog.php'?'nav-item active':'nav-item' )?>"><a class="nav-link"
                        href="blog.php">Blog</a></li>
                <li class="<?php echo ($current_file == 'contact.php'?'nav-item active':'nav-item' )?>"><a
                        class="nav-link" href="contact.php">Contact us</a></li>
            </ul>
            <?php if(isset($_SESSION['user_name'])){ ?>
            <ul class="d-flex  mb-md-0" style="list-style: none;">
                <li style="padding: 0px 5px 0px 5px"><button class="signbtn" data-bs-toggle="offcanvas" data-bs-target="#myaccount"
                aria-controls="myaccount">My Account</button></li>
            </ul>
              <?php }else{ ?>
            <li style="padding: 0px 5px"><a href="login.php"><button class="loginbtn" type="button">Login</button></a></li>

            <li style="padding: 0px 5px"><a href="sign.php"><button class="signbtn" type="button">Singin</button></a></li>
            <?php } ?>
        </div>
    </div>

</nav>

<!-- End Header/Navigation -->

<!--off cnavas start -->

<div class="offcanvas offcanvas-start" tabindex="-1" id="myaccount" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title d-flex" id="offcanvasExampleLabel"><?php echo $_SESSION['user_name']; ?> 
              <ul class="d-flex  mb-md-0" style="list-style: none;">
                <li style="padding: 0px 5px 0px 5px"><a href="logout.php"><button type="button" class="signbtn">Logout</button></a></li>
              </ul>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>
            <div class="profileimg">
              <img src="<?php echo $_SESSION['profile_img']; ?>" alt="">
            </div>
           <p>Email: <?php echo $_SESSION['user_email'] ?></p>
           <p>Contact No: <?php echo $_SESSION['user_phone'] ?></p>
        </div>
        <?php 
    if(isset($_SESSION['user_type'])){?>
        <div class="dropdown mt-3">
            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Create Product
            </button>
        </div>
        <?php } ?>

    </div>
</div>

<!--off cnavas end -->

<!--create product modal start -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Product Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="createproduct.php" enctype="multipart/form-data">
      <div class="modal-body">
          <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" id="name">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Product Price</label>
            <input type="number" class="form-control" name="price" id="price">
          </div>
          <div class="mb-3">
            <label for="desc" class="form-label">Description</label>
            <input type="text" class="form-control" name="desc" id="desc">
          </div>
          <div class="mb-3">
            <label for="pdimg" class="form-label">Product Image</label>
            <input type="file" class="form-control" name="pdimg" id="pdimg">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--create product modal end -->