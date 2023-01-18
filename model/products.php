<?php
function getProducts($db)
    {
        $sql = 'SELECT * FROM products';
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
?>