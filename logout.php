<?php 

session_start();
unset($_SESSION['rodrigo']);
session_destroy();

echo '<script>window.location.href = "/login.php";</script>'; 
?>