<?php
include('./config/db.php');
include('./model/products.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP MySql OOP CRUD Example Tutorial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- Header -->
<div class="container">
<!-- content -->
<form action="">
    <label for="name">Product Name</label>
    <input type="text" name="name">
    <label for="stock">Stock</label>
    <input type="range" min="0" max="99" name="stock" id="stock" onChange="change();"> <span id="result"></span>
    <label for="price">Price</label>
    <input type="number" name="price">
</form>
    
</div>
<!-- Footer -->
<script src="script.js"></script>
</body>
</html>