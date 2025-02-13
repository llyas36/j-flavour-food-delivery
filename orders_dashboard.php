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

// Fetch orders from the database
try {
    $stmt = $conn->prepare("
        SELECT 
            orders.id AS order_id, 
            orders.full_name, 
            orders.phone_number, 
            orders.address, 
            orders.order_date,
            order_items.food_name, 
            order_items.price, 
            order_items.quantity, 
            order_items.total
        FROM orders
        JOIN order_items ON orders.id = order_items.order_id
        ORDER BY orders.order_date DESC
    ");
    $stmt->execute();
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die("Error fetching orders: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Dashboard</title>
    <link rel="stylesheet" href="css/orders_dashborad_style.css">

</head>
<body>
    <div class="container">
        <h2>Orders Dashboard</h2>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Order Date</th>
                    <th>Food Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($orders)) : ?>
                    <?php foreach ($orders as $order) : ?>
                        <tr>
                            <td><?= htmlspecialchars($order['order_id']); ?></td>
                            <td><?= htmlspecialchars($order['full_name']); ?></td>
                            <td><?= htmlspecialchars($order['phone_number']); ?></td>
                            <td><?= htmlspecialchars($order['address']); ?></td>
                            <td><?= htmlspecialchars($order['order_date']); ?></td>
                            <td><?= htmlspecialchars($order['food_name']); ?></td>
                            <td><?= htmlspecialchars(number_format($order['price'], 2)); ?></td>
                            <td><?= htmlspecialchars($order['quantity']); ?></td>
                            <td><?= htmlspecialchars(number_format($order['total'], 2)); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="9" style="text-align: center;">No orders found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>