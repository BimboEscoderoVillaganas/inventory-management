<?php

//Developed BY: Villaganas, Bimbo, Escodero.
// add_inventory.php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $productName = $_POST['productName'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];

  $sql = "INSERT INTO inventory (product_name, description, price, quantity) VALUES ('$productName', '$description', '$price', '$quantity')";

  if (mysqli_query($connection, $sql)) {
    header("Location: index.php");
  } else {
    echo "Error adding inventory: " . mysqli_error($connection);
  }
}

mysqli_close($connection);
?>
