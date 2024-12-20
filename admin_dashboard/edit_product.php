<?php
// Database configuration
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'admin';

// Connect to the database
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get product details
$product_id = intval($_GET['product_id']);
$sql = "SELECT * FROM product WHERE product_id = $product_id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();

// Handle Update Request
if (isset($_POST['update'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $type = $conn->real_escape_string($_POST['type']);
    $variety = $conn->real_escape_string($_POST['variety']);
    $seasonality = $conn->real_escape_string($_POST['seasonality']);

    $update_sql = "UPDATE product SET 
        name = '$name', 
        type = '$type', 
        variety = '$variety', 
        seasonality = '$seasonality' 
        WHERE product_id = $product_id";
    
    if ($conn->query($update_sql)) {
        header("Location: product.php"); // Redirect to the products page
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="edit_product.css">

</head>
<body>
    <h1></h1>
    <form method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?= $product['name'] ?>" required><br><br>
        
        <label for="type">Type:</label><br>
        <input type="text" id="type" name="type" value="<?= $product['type'] ?>" required><br><br>
        
        <label for="variety">Variety:</label><br>
        <input type="text" id="variety" name="variety" value="<?= $product['variety'] ?>" required><br><br>
        
        <label for="seasonality">Seasonality:</label><br>
        <input type="text" id="seasonality" name="seasonality" value="<?= $product['seasonality'] ?>" required><br><br>
        
        <button type="submit" name="update">Update Product</button>
    </form>

    
</body>
</html>
