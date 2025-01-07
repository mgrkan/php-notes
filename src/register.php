<?php
require_once 'db.php';

if(!isset($_SESSION)){ 
    session_start(); 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    try {
        $stmt->execute([$username, $password]);
        echo "User created successfully.";
        echo "<a href='./views/login_page.php'>Log in</a>";
        exit;
    } catch (PDOException $e) {
        $error = "Username already exists.";
        echo $error;
    }
}


?>