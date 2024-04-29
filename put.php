<?php
$tasks = [
    1 => ["description" => "Buy groceries", "completed" => false],
    2 => ["description" => "Do laundry", "completed" => true]
];
parse_str(file_get_contents('php://input'), $putData);
if (isset($putData['id'], $putData['completed'], $tasks[$putData['id']])) {
    $tasks[$putData['id']]['completed'] = (bool) $putData['completed'];

    header('Content-Type: application/json');
    echo json_encode($tasks[$putData['id']]);
} else {

    http_response_code(404);
    echo json_encode(["error" => "Task not found or missing data"]);
}
?>
