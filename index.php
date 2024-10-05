<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple E-Commerce</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Our Products</h1>
        <div class="products">
            <?php
            include('php/config.php');
            $result = $conn->query("SELECT * FROM products");
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="product">
                    <img src="images/' . $row['image'] . '" alt="' . $row['name'] . '">
                    <h3>' . $row['name'] . '</h3>
                    <p>' . $row['description'] . '</p>
                    <p>Price: $' . $row['price'] . '</p>
                    <button class="add-to-cart" data-id="' . $row['id'] . '">Add to Cart</button>
                </div>';
            }
            ?>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
