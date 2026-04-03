<?php

require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount(__DIR__ . '/firebase-key.json');

$auth = $factory->createAuth();

// Get token from frontend
$data = json_decode(file_get_contents("php://input"), true);
$idToken = $data['idToken'];

try {
    $verifiedIdToken = $auth->verifyIdToken($idToken);

    $uid = $verifiedIdToken->claims()->get('sub');

    $user = $auth->getUser($uid);

    echo json_encode([
        "status" => "success",
        "name" => $user->displayName,
        "email" => $user->email
    ]);

} catch (Exception $e) {
    echo json_encode([
        "status" => "error",
        "message" => $e->getMessage()
    ]);
}