<?php
require_once 'db.php';
if(!isset($_SESSION)){ 
    session_start(); 
} 
session_destroy();
header('Location: ./views/login_page.php');
?>