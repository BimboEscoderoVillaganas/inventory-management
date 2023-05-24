

<!--Developed BY: Villaganas, Bimbo, Escodero.-->
<!DOCTYPE html>
<html>
<head>
  <title>Inventory Management</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Inventory Management System</h1>
  
  <!-- Add Inventory Form -->
  <h2>Add Inventory</h2>
  <form action="add_inventory.php" method="POST">
    <label for="productName">Product Name:</label>
    <input type="text" id="productName" name="productName" required>
    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>
    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01" required>
    <label for="quantity">Quantity in Stock:</label>
    <input type="number" id="quantity" name="quantity" required>
    <input type="submit" value="Add Inventory">
  </form>

  <!-- Display Inventory -->
  <h2>Inventory List</h2>
  <table>
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
      <?php include 'display_inventory.php'; ?>
    </tbody>
  </table>

  <script src="script.js"></script>
</body>
</html>
