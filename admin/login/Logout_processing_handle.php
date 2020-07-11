<?php 
session_start();
unset($_SESSION['username']);
unset($_SESSION['user']);
unset($_SESSION['user_id']);
unset($_SESSION['status1']);
header('Location: ../login.php');
?>