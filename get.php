<?php

// Simulated database of users
$users = [
    ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
    ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
    ['id' => 3, 'name' => 'Alice Johnson', 'email' => 'alice@example.com']
];

// Check if the REQUEST_METHOD is set, and if it's 'GET' and $_GET is not empty
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)) {
    header('Content-Type: application/json');
    echo json_encode($users);
} else {
    echo "No users found."; // Output when the condition is not met
}