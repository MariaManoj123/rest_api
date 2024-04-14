<?php

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $id = $_GET['id'] ?? null;

    if ($id !== null) {
        http_response_code(200);
        echo json_encode(["message" => "Resource with ID $id deleted successfully"]);
    } else {
        http_response_code(400);
        echo json_encode(["error" => "Missing ID parameter"]);
    }
} else {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
}

?>
