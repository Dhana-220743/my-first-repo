<?php
session_start();
require __DIR__ . '/config/db.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (!$email || !$password) {
    die("Email and password are required.");
}

// check user
$existingUser = $users->findOne(['email' => $email]);

if ($existingUser) {
    die("User already exists.");
}

// hash password
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

// insert
$users->insertOne([
    'email' => $email,
    'password' => $hashedPassword
]);

echo "Signup successful!";