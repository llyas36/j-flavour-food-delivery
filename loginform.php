<?php 
session_start();

include('dbconnection.php'); // Ensure this file contains the correct connection code

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['form_email'];
    $password = $_POST['form_password'];

    // Query to find the user by email
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user; // Store user details in session
            header("Location: foods.php"); // Redirect to foods.php
            exit();
        } else {
            echo "<script>alert('Incorrect password!');</script>";
        }
    } else {
        echo "<script>alert('User not found!');</script>";
    }
    mysqli_close($conn);
}
?>
