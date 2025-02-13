<?php
session_start();

// Initialize the cart in the session if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$cartItems = $_SESSION['cart'];

function displayCartTable($cartItems)
{
    echo '<h3>Your Cart</h3>';
    echo '<table border="1" style="width:100%; text-align:left;">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Image</th>';
    echo '<th>Food Name</th>';
    echo '<th>Price</th>';
    echo '<th>Quantity</th>';
    echo '<th>Total</th>';
    echo '<th>Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    if (empty($cartItems)) {
        echo '<tr>';
        echo '<td colspan="6" style="text-align:center;">Your cart is empty.</td>';
        echo '</tr>';
    } else {
        $total = 0;

        foreach ($cartItems as $index => $item) {
            $itemTotal = $item['price'] * $item['qty'];
            $total += $itemTotal;

            echo '<tr>';
            echo '<td><img src="' . htmlspecialchars($item['img']) . '" alt="' . htmlspecialchars($item['name']) . '" width="50"></td>';
            echo '<td>' . htmlspecialchars($item['name']) . '</td>';
            echo '<td>$' . number_format($item['price'], 2) . '</td>';
            echo '<td>' . intval($item['qty']) . '</td>';
            echo '<td>$' . number_format($itemTotal, 2) . '</td>';
            echo '<td><a href="remove-item.php?index=' . $index . '" style="color:red;">&times;</a></td>';
            echo '</tr>';
        }

        // Display the cart total
        echo '<tr>';
        echo '<td colspan="4"><strong>Total</strong></td>';
        echo '<td><strong>$' . number_format($total, 2) . '</strong></td>';
        echo '<td></td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}

// Call the function to display the cart table
displayCartTable($cartItems);
?>
