<!DOCTYPE html>
<html>
<head>
    <title>Simple Grocery Store</title>
</head>
<body>
    <h2>Products Available</h2>
    <ul>
        <?php include 'display_products.php'; ?>
    </ul>

    <h3>Add Product</h3>
    <form action="add_product.php" method="post">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price"><br><br>
        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity"><br><br>
        <input type="submit" value="Add Product">
    </form>

    <h3>Remove Product</h3>
    <form action="remove_product.php" method="post">
        <label for="product_id">Product ID:</label>
        <input type="text" id="product_id" name="product_id"><br><br>
        <input type="submit" value="Remove Product">
    </form>
</body>
</html>
