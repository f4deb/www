<?php
    try {
        $db = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
