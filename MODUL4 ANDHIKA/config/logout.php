<?php 
session_start();
unset($_SESSION['sudah_login']);
session_destroy();
header("Location:../pages/Login-Andhika.php");
isset($_COOKIE['bg-nav'])? $_COOKIE['bg-nav'] : 'primary';
?>