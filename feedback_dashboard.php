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

// Fetch feedback from the database
try {
    $stmt = $conn->prepare("
        SELECT * FROM feedback ORDER BY submitted_at DESC
    ");
    $stmt->execute();
    $feedbacks = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die("Error fetching feedback: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Dashboard</title>
    <link rel="stylesheet" href="css/feedback_style.css">

</head>
<body>
    <div class="container">
        <h2>Feedback Dashboard</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($feedbacks)) : ?>
                    <?php foreach ($feedbacks as $feedback) : ?>
                        <tr>
                            <td><?= htmlspecialchars($feedback['id']); ?></td>
                            <td><?= htmlspecialchars($feedback['full_name']); ?></td>
                            <td><?= htmlspecialchars($feedback['email']); ?></td>
                            <td><?= htmlspecialchars($feedback['phone_number']); ?></td>
                            <td><?= htmlspecialchars($feedback['subject']); ?></td>
                            <td><?= htmlspecialchars($feedback['message']); ?></td>
                            <td><?= htmlspecialchars($feedback['submitted_at']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="7" style="text-align: center;">No feedback found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>