<?php
session_start();
if($_SESSION['admin'] != "admin"){
    header("Location: admin/login.php");    
    exit; 
}
?>