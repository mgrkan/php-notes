<?php
if(!isset($_SESSION)){ 
    session_start(); 
} 
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $id = $_POST["id"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $sql = "UPDATE notes SET title = ?, content = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $content, $id]);
    header('Location: ./index.php');
}
?>