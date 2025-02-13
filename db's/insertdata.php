<?php

require "dbconnection.php";

// Correctly formatted image path
$img_path = "C:\\xampp\\htdocs\\php-version\\sandwich.jpg";

// Correct SQL query syntax
$sql = "INSERT INTO cartexe.box (f_img, f_name, price, qty, total) 
        VALUES ('$img_path', 'Sandwich', 150, 3, 450)";

if (!mysqli_query($conn, $sql)) {
    echo "Error while inserting data: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
