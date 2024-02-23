<?php
session_start();

$index = $_GET['index'];
array_splice($_SESSION['product'], $index, 1);
// unset($_SESSION['product'][$index]);
header('Location: cart.php');


?>