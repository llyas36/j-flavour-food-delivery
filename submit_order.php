<?php
// Database connection
$host = 'localhost';
$dbname = 'cartexe';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check if form data is posted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get delivery details
    $fullName = htmlspecialchars($_POST['full_name']);
    $phoneNumber = htmlspecialchars($_POST['phone_number']);
    $address = htmlspecialchars($_POST['address']);
    
    // Get order data (JSON) and decode it
    $orderData = json_decode($_POST['order_data'], true);

    if (!empty($orderData)) {
        try {
            // Begin transaction
            $conn->beginTransaction();

            // Insert delivery details into orders table (optional: order tracking)
            $stmtOrder = $conn->prepare("
                INSERT INTO orders (full_name, phone_number, address, order_date)
                VALUES (:full_name, :phone_number, :address, NOW())
            ");
            $stmtOrder->execute([
                ':full_name' => $fullName,
                ':phone_number' => $phoneNumber,
                ':address' => $address
            ]);

            // Get the last inserted order ID
            $orderId = $conn->lastInsertId();

            // Insert each food item
            $stmtItem = $conn->prepare("
                INSERT INTO order_items (order_id, food_name, price, quantity, total)
                VALUES (:order_id, :food_name, :price, :quantity, :total)
            ");

            foreach ($orderData as $item) {
                $stmtItem->execute([
                    ':order_id' => $orderId,
                    ':food_name' => htmlspecialchars($item['name']),
                    ':price' => floatval($item['price']),
                    ':quantity' => intval($item['qty']),
                    ':total' => floatval($item['total'])
                ]);
            }

            // Commit transaction
            $conn->commit();

            echo "Order successfully saved!";
        } catch (Exception $e) {
            // Rollback on failure
            $conn->rollBack();
            die("Error saving order: " . $e->getMessage());
        }
    } else {
        die("Order data is missing!");
    }
} else {
    die("Invalid request!");
}
?>