<?php
include("path.php");
    session_start();
    
    unset($_SESSION['id']);
    unset($_SESSION['login']);
    unset($_SESSION['admin']);
    unset($_SESSION['cartUser']);
    unset($_SESSION['cart']);
    unset($_SESSION['allPriceOrder']);
    header('location:' . BASE_URL);
?>
