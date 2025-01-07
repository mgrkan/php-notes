<?php 
require_once 'db.php';
if(!isset($_SESSION)){ 
    session_start(); 
} 

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    if ($user && password_verify($password, $user["password"])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: ./index.php');
        exit();
    } else {
        echo "Invalid username or password.\n";
        echo "<a href='./views/login_page.php'>Try again</a>";

    }
}

?>

