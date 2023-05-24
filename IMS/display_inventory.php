<?php

//Developed BY: Villaganas, Bimbo, Escodero.
// display_inventory.php
include 'db_connect.php';

$sql = "SELECT * FROM inventory";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['product_name'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['quantity'] . "</td>";
    echo "<td><a href='delete_inventory.php?id=" . $row['id'] . "'>Delete</a></td>"; // Add delete button
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='5'>No inventory items found</td></tr>";
}

mysqli_close($connection);
?>
