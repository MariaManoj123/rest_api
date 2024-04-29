<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
    exit;
}

$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['name'], $data['email'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Name and email are required']);
    exit;
}

$users = json_decode(file_get_contents('users.json'), true);
$newUser = ['id' => uniqid(), 'name' => $data['name'], 'email' => $data['email']];
$users[] = $newUser;
file_put_contents('users.json', json_encode($users));

http_response_code(201);
echo json_encode($newUser);
