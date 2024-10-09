<?php
require_once 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit();
}

$user_id = $_SESSION['user_id'];

// Define the bundle packages
$bundlePackages = [
    '1GB' => 5.5,
    '2GB' => 10.5,
    '3GB' => 15,
    '4GB' => 20,
    '5GB' => 24,
    '6GB' => 28,
    '7GB' => 33,
    '8GB' => 37,
    '9GB' => 41,
    '10GB' => 44,
    '12GB' => 52,
    '13GB' => 56,
    '14GB' => 60,
    '15GB' => 64,
    '16GB' => 68,
    '18GB' => 76,
    '20GB' => 84,
    '25GB' => 108,
    '30GB' => 127,
    '50GB' => 210,
    '100GB'=> 405

    // Add more packages as necessary
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $selectedBundle = $_POST['bundle'];
    $cost = $bundlePackages[$selectedBundle];

    // Get user's current balance
    $result = mysqli_query($conn, "SELECT balance FROM users WHERE id = $user_id");
    $user = mysqli_fetch_assoc($result);

    // Check if sufficient balance
    if ($user['balance'] >= $cost) {
        // Deduct the cost from the user's balance
        $newBalance = $user['balance'] - $cost;
        mysqli_query($conn, "UPDATE users SET balance = $newBalance WHERE id = $user_id");

        echo "Order placed successfully!";
    } else {
        echo "Insufficient balance!";
    }
}
?>
