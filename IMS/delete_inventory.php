<?php

//Developed BY: Villaganas, Bimbo, Escodero.
// delete_inventory.php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "DELETE FROM inventory WHERE id = '$id'";

  if (mysqli_query($connection, $sql)) {
    header("Location: index.php");
  } else {
    echo "Error deleting inventory: " . mysqli_error($connection);
  }
}

mysqli_close($connection);
?>
