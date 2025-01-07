<?php

$conn_string = "mysql:host=" . getenv('MYSQL_HOST') . ";dbname=" . getenv('MYSQL_DATABASE');
try {
    $pdo = new PDO($conn_string, getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    die("Database COnnection Failed: " . $e->getMessage());
}

?>