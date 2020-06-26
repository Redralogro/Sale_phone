<?php 
echo "Hôi nhách";
session_start();
unset($_SESSION['username']);
unset($_SESSION['user']);
header('Location: ../index.php');
?>