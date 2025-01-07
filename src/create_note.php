<?php
require_once 'db.php';
if(!isset($_SESSION)){ 
    session_start(); 
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $user_id = $_SESSION['user_id'];
    $sql = "INSERT INTO notes (title, content, user_id) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $content, $user_id]);
    header('Location: ./index.php');
    exit();
}

?>