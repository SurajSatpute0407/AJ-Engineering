<?php
session_start();
require_once 'connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

if($email!='' && $password!=''){
    $sql = "SELECT * FROM users WHERE email = '$email'";
}
?>