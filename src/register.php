<?php
require_once 'db.php';

if(!isset($_SESSION)){ 
    session_start(); 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"];
    $password2 = $_POST["password-check"];
    $password = $_POST["password"];
    if ($password !== $password2) {
        //echo "Passwords do not match.";
        //sleep(3);
        //header('Location: ./views/register_page.php');
        //echo "<script type='text/javascript'>document.location.href='./views/register_page.php';</script>";
        header("refresh: 2; ./views/register_page.php");
        echo "Passwords do not match. Redirecting in 2...";
        exit;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);

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