<?php
// Database connection details
$host = "localhost"; // Replace with your host
$username = "root"; // Replace with your username
$password = ""; // Replace with your password
$database = "admin"; // Replace with your database name

// Establish a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $id = $_POST['id'];
    $product_id = $_POST['product_id'];
    $type = $_POST['type'];
    $name = $_POST['name'];
    $variety = $_POST['variety'];
    $seasonality = $_POST['seasonality'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $date = $_POST['date'];

    // Update SQL query
    $sql = "UPDATE sales 
            SET product_id = ?, 
                type = ?, 
                name = ?, 
                variety = ?, 
                seasonality = ?, 
                quantity = ?, 
                price = ?, 
                date = ? 
            WHERE id = ?";

    // Prepare and bind
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issssidis", $product_id, $type, $name, $variety, $seasonality, $quantity, $price, $date, $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>