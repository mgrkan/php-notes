<?php
if(!isset($_SESSION)){ 
    session_start(); 
} 
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $id = $_POST["id"];
    $sql = "DELETE FROM notes WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    header('Location: ./index.php');
}
?>