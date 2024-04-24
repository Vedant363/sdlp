<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    // Define an array of products
    $products = array(
        array(
            "name" => "T-shirt",
            "price" => 15.99,
            "stock" => 100
        ),
        array(
            "name" => "Jeans",
            "price" => 29.99,
            "stock" => 50
        ),
        array(
            "name" => "Sneakers",
            "price" => 49.99,
            "stock" => 75
        )
    );

    // Function to display products
    function displayProducts($products) {
        echo "<h2>Products</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Price</th><th>Stock</th></tr>";
        foreach ($products as $product) {
            echo "<tr>";
            echo "<td>" . $product['name'] . "</td>";
            echo "<td>$" . $product['price'] . "</td>";
            echo "<td>" . $product['stock'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    // Display the products
    displayProducts($products);
    ?>
</body>
</html>
