<?php
  // Connect to the database
  $db = new PDO('mysql:host=localhost;port=3306;dbname=mydatabase', 'username', 'password');

  // Define the SQL query
  $sql = "CREATE TABLE products (
    id INTEGER PRIMARY KEY,
    name TEXT NOT NULL,
    stock INTEGER NOT NULL,
    img TEXT,
    price REAL NOT NULL,
    date DATE NOT NULL
  )";

  // Execute the query
  $stmt = $db->prepare($sql);
  $stmt->execute();

  // Print a message
  echo "Table 'products' created successfully";
?>