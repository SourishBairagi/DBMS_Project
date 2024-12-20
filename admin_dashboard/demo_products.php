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

// Handle Delete Request
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $delete_sql = "DELETE FROM product WHERE product_id = $delete_id";
    if ($conn->query($delete_sql)) {
        header("Location: demo_products.php"); // Redirect to refresh the page
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Handle Update Request
if (isset($_POST['update'])) {
    $product_id = intval($_POST['product_id']);
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
        header("Location: demo_products.php"); // Redirect to refresh the page
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Fetch data from the 'products' table
$sql = "SELECT product_id, name, type, variety, seasonality FROM product";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            border: 1px solid #ddd;
            border-radius: 3px;
            margin: 2px;
            display: inline-block;
            color: #333;
        }
        .btn-edit {
            background-color: #f0ad4e;
            color: white;
        }
        .btn-delete {
            background-color: #d9534f;
            color: white;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Product Management</h1>
    <table>
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Variety</th>
                <th>Seasonality</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['product_id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['type'] ?></td>
                        <td><?= $row['variety'] ?></td>
                        <td><?= $row['seasonality'] ?></td>
                        <td>
                            <a class="btn btn-edit" href="edit_product.php?product_id=<?= $row['product_id'] ?>">Edit</a>
                            <a class="btn btn-delete" href="products.php?delete_id=<?= $row['product_id'] ?>" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" style="text-align: center;">No products found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
