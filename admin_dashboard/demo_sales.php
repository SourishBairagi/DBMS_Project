



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Sales Data</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .update-form-container {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      width: 400px;
    }

    .update-form-container h2 {
      margin-bottom: 20px;
      color: #4CAF50;
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-group input[type="number"] {
      -moz-appearance: textfield;
    }

    button {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background: #45a049;
    }
  </style>
</head>
<body>
  <div class="update-form-container">
    <h2>Update Sales Data</h2>
    <form action="update_sales.php" method="POST">
      <div class="form-group">
        <label for="id">Sale ID</label>
        <input type="number" name="id" id="id" placeholder="Enter Sale ID" required>
      </div>
      <div class="form-group">
        <label for="product_id">Product ID</label>
        <input type="number" name="product_id" id="product_id" placeholder="Enter Product ID" required>
      </div>
      <div class="form-group">
        <label for="type">Type</label>
        <input type="text" name="type" id="type" placeholder="Enter Type">
      </div>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Product Name">
      </div>
      <div class="form-group">
        <label for="variety">Variety</label>
        <input type="text" name="variety" id="variety" placeholder="Enter Variety">
      </div>
      <div class="form-group">
        <label for="seasonality">Seasonality</label>
        <input type="text" name="seasonality" id="seasonality" placeholder="Enter Seasonality">
      </div>
      <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" id="quantity" placeholder="Enter Quantity">
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" id="price" step="0.01" placeholder="Enter Price">
      </div>
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name="date" id="date" placeholder="Enter Date">
      </div>
      <button type="submit">Update Sale</button>
    </form>
  </div>
</body>
</html>
