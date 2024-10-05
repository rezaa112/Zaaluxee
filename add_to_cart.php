<?php
include('config.php');

if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    $quantity = 1; // Default quantity
    $result = $conn->query("SELECT price FROM products WHERE id = $product_id");
    $row = $result->fetch_assoc();
    $price = $row['price'];
    $total_price = $price * $quantity;

    $sql = "INSERT INTO orders (product_id, quantity, total_price) VALUES ($product_id, $quantity, $total_price)";
    if ($conn->query($sql) === TRUE) {
        echo "Product added to cart!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
