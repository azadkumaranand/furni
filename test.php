<?php

$addtocart[] = "azad";

$addtocart[] = "suman";

$addtocart[] = "rajkumar";


print_r($addtocart);



?>

<?php if(empty($_SESSION['user_name'])){ ?>
            <li style="padding: 0px 5px 0px 5px"><a href="login.php"><button class="loginbtn" type="button">Login</button></a></li>
            <li style="padding: 0px 5px 0px 5px"><a href="sing.php"><button class="signbtn" type="button">Sing in</button></a></li>
            <?php }else{ ?>
                <li style="padding: 0px 5px 0px 5px"><button type="button" class="loginbtn"><?php echo $_SESSION['user_name']; ?></button></li>
                <li style="padding: 0px 5px 0px 5px"><a href="logout.php"><button type="button" class="signbtn">Logout</button></a></li>
            <?php } ?>