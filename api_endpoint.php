<?php

header('Content-Type: application/json');

// Sample data for testing
$items = [
    ["id" => 1, "name" => "Item 1"],
    ["id" => 2, "name" => "Item 2"],
    ["id" => 3, "name" => "Item 3"]
];

// Endpoint to get a list of all items
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['endpoint']) && $_GET['endpoint'] === 'items') {
    echo json_encode(["items" => $items]);
} else {
    echo json_encode(["message" => "Invalid endpoint"]);
}
