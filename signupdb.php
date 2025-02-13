<?php
session_start();
include('dbconnection.php'); // Ensure this file contains the correct connection code

// Collect form inputs
$name = $_POST['form_name'];
$email = $_POST['form_email'];
$password = $_POST['form_password'];

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert query for name, email, and password
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    // Set success message
    $_SESSION['success'] = "Successfully Registered";

    // Redirect back to the main page and scroll to the #signin section
    echo "<script>
        alert('Signup successful! Redirecting to login...');
        window.location.href = 'index.php#signin';
    </script>";
} else {
    // Set failure message
    $_SESSION['unsuccess'] = "Registration Unsuccessful: " . mysqli_error($conn);

    // Redirect back to the signup section with an error
    echo "<script>
        alert('Signup failed! Please try again.');
        window.location.href = 'index.php#signup';
    </script>";
}

// Close the database connection
mysqli_close($conn);
?>
