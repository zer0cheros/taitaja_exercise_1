<?php
     $host = 'IP';
     $user = 'ROOT?';
     $dbName = 'DB_NAME';
     $pass = 'YOUR_PASSWORD';
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);
        // Ifall error returnar PDO::ERRMODE_EXCEPTION vad som är fel....
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connection established';
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>