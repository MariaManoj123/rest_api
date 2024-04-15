<?php

$data = json_encode(['name' => 'Updated Name', 'email' => 'updated@example.com', 'age' => 25]);
echo file_get_contents('http://example.com/api/resource/1', false, stream_context_create([
    'http' => [
        'method' => 'PUT',
        'header' => 'Content-Type: application/json',
        'content' => $data
    ]
]));

?>
