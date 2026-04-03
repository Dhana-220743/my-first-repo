<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");

// database + collection
$db = $client->mongoDB;
$users = $db->users;
?>