<?php
if(!isset($_SESSION)){ 
    session_start(); 
}

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function redirectIfNotLoggedIn() {
    if (!isLoggedIn()) {
        header('Location: ./views/login_page.php');
        exit();
    }
}
?>