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

// Check if form data is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data and sanitize inputs
    $fullName = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $phoneNumber = htmlspecialchars($_POST['phone_number']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    try {
        // Insert feedback into the database
        $stmt = $conn->prepare("
            INSERT INTO feedback (full_name, email, phone_number, subject, message, submitted_at)
            VALUES (:full_name, :email, :phone_number, :subject, :message, NOW())
        ");
        $stmt->execute([
            ':full_name' => $fullName,
            ':email' => $email,
            ':phone_number' => $phoneNumber,
            ':subject' => $subject,
            ':message' => $message
        ]);

        echo "Thank you for your feedback!";
    } catch (Exception $e) {
        die("Error saving feedback: " . $e->getMessage());
    }
} else {
    die("Invalid request method!");
}
?>