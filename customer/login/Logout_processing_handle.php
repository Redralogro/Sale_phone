<?php 
session_start();
unset($_SESSION['customer']);
unset($_SESSION['Customer_name']);
header('Location: ./login.php');
?>