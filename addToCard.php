<?php 
include ('connection.php');
    session_start();
if(isset($_POST['addToCard'])){
    $email = $_SESSION['email'];

if(!isset($email)){
    header('location:login.php');
}
}
