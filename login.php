<?php
require_once 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uniqueID = $_POST['uniqueID'];

    // Check if uniqueID exists in the database
    $result = mysqli_query($conn, "SELECT * FROM users WHERE uniqueID = '$uniqueID'");
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        $_SESSION['user_id'] = $user['id']; // Store user ID in session
        header('Location: agentDashboard.php'); // Redirect to dashboard
        exit();
    } else {
        $error = 'Invalid unique ID';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        <form method="POST">
            <label for="uniqueID">Unique ID:</label>
            <input type="text" name="uniqueID" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
