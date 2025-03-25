<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../Login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome to Your Dashboard</h1>
        <p>You are successfully logged in.</p>

        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>