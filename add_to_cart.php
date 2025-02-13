<?php
session_start();

// Get data from the request
$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);

if (isset($data['cart']) && is_array($data['cart'])) {
    $_SESSION['cart'] = $data['cart']; // Save cart to session

    echo json_encode(["success" => true]);
    exit;
}

echo json_encode(["success" => false, "message" => "Invalid data."]);
exit;
?>
