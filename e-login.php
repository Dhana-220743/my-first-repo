<?php
session_start();
require __DIR__ . '/config/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!$email || !$password){
        die("Please fill in all details");
    }
    $user = $users->findOne(['email' =>$email]);
    if(!$user){
        die("User not found");
    }
    if(!password_verify($password, $user['password'])){
        die("Incorrect password");
    }
    $_SESSION['user_id'] = $user['_id'];
    header("Location:E_kart.html");
    exit();

}
?>