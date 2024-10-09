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
    // Add more packages as necessary
];

// Initialize cart if not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add bundle to cart
if (isset($_POST['add_to_cart'])) {
    $selectedBundle = $_POST['bundle'];
    $cost = $bundlePackages[$selectedBundle];
    $beneficiaryNumber = $_POST['beneficiary_number'];


    // Add the selected bundle to the cart
    $_SESSION['cart'][] = [
        'bundle' => $selectedBundle,
        'cost' => $cost,
        'beneficiary_number' => $beneficiaryNumber
    ];

    echo "Bundle added to cart!";
}

// Remove item from cart
if (isset($_POST['remove_item'])) {
    $index = $_POST['item_index'];
    unset($_SESSION['cart'][$index]);
    // Re-index the cart array to maintain sequential keys
    $_SESSION['cart'] = array_values($_SESSION['cart']);
    echo "Item removed from cart!";
}

// Checkout and submit all orders
if (isset($_POST['checkout'])) {
    // Get user's current balance
    $result = mysqli_query($conn, "SELECT balance FROM users WHERE id = $user_id");
    $user = mysqli_fetch_assoc($result);
    $balance = $user['balance'];

    // Calculate total cost of all bundles in the cart
    $totalCost = 0;
    foreach ($_SESSION['cart'] as $item) {
        $totalCost += $item['cost'];
    }

    // Check if user has sufficient balance
    if ($balance >= $totalCost) {
        // Deduct the total cost from the user's balance
        $newBalance = $balance - $totalCost;
        mysqli_query($conn, "UPDATE users SET balance = $newBalance WHERE id = $user_id");

        // Insert each order into the orders table
        foreach ($_SESSION['cart'] as $item) { 
            $bundle = $item['bundle'];
            $cost = $item['cost'];
            $beneficiaryNumber = $item['beneficiary_number'];
            $query = "INSERT INTO orders (user_id, package_size, amount, beneficiary_number) VALUES ($user_id, '$bundle', $cost , $beneficiaryNumber)";
            mysqli_query($conn, $query);
        }

        // Clear the cart after checkout
        $_SESSION['cart'] = [];

        echo "Checkout successful! Orders have been placed.";
    } else {
        echo "Insufficient balance!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Data Bundles</title>
</head>
<body>
    <h2>Select a Data Bundle</h2>

    <!-- Balance -->
     <h3> GHC <? 
     
     echo $user_id ?> </h3>

    <form method="POST" action="">
        <label for="bundle">Choose a bundle:</label>
        <select name="bundle" required>
            <?php foreach ($bundlePackages as $bundle => $price): ?>
                <option value="<?= $bundle ?>"><?= $bundle ?> - $<?= $price ?></option>
            <?php endforeach; ?>
        </select>
        <input type="text" name="beneficiary_number" placeholder="Beneficiary Number" required>

        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>

    <h2>Your Cart</h2>
    <ul>
        <?php if (!empty($_SESSION['cart'])): ?>
            <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                <li>
                <?= $item['beneficiary_number'] ?> - <?= $item['bundle'] ?> - $<?= $item['cost']  ?>
                    <form method="POST" action="" style="display:inline;">
                        <input type="hidden" name="item_index" value="<?= $index ?>">
                        <!-- Beneficiary Number -->
                        <input type="hidden" name="beneficiary_number" placeholder="Beneficiary Number">
                        <button type="submit" name="remove_item">Remove</button>
                    </form>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Your cart is empty.</li>
        <?php endif; ?>
    </ul>

    <?php if (!empty($_SESSION['cart'])): ?>
        <form method="POST" action="">
            <button type="submit" name="checkout">Checkout</button>
        </form>
    <?php endif; ?>
</body>
</html>
