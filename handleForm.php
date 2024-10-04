<?php
session_start();

// Prices for items
$itemPrices = [
  "sandwich" => 50,
  "chips" => 75,
  "grill" => 150
];

// Get order details
$selectedItem = $_GET['menuItem'] ?? null;
$itemQuantity = (int)($_GET['itemQty'] ?? 0);
$customerPayment = (float)($_GET['payment'] ?? 0);

// Calculate total and change
$totalCost = $itemPrices[$selectedItem] * $itemQuantity ?? 0;
$balance = $customerPayment - $totalCost;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Receipt</title>
</head>
<body>
  <div style="text-align: center; padding: 20px;">
    <h3>Receipt</h3>
    <p>Item: <?php echo ucfirst($selectedItem); ?></p>
    <p>Total: ₱<?php echo number_format($totalCost, 2); ?></p>
    <p>Paid: ₱<?php echo number_format($customerPayment, 2); ?></p>
    <p>Change: ₱<?php echo number_format($balance, 2); ?></p>
    <a href="index.php">Back to Menu</a>
  </div>
</body>
</html>
