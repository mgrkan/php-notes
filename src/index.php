<?php
if(!isset($_SESSION)){ 
    session_start(); 
} 
require_once 'db.php';
require_once 'auth.php';

redirectIfNotLoggedIn();

?>