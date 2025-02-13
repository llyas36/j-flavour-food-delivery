<?php 

require "dbconnection.php";

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cartExe";

// SQL to create a table
$sql = "
CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20),
    subject VARCHAR(255),
    message TEXT NOT NULL,
    submitted_at DATETIME NOT NULL
);

";

if (!mysqli_query($conn, $sql)) {
    echo "Error while creating table: " . mysqli_error($conn);
} 


// Close the database connection
mysqli_close($conn);

?>
