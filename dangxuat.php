<?php 
    session_start();
    setcookie('user','xóa',time()- (86400 * 30),"/");
    unset($_SESSION['cart']);
    session_destroy();
    header('Location: index.php');
?>