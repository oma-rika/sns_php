<?php

//ユーザー一覧
echo "Hello";

require_once(__DIR__ . '/../config/config.php');

if($_SESSION['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
        echo "Invalid Token!";
        exit;
    }
}

$_SESSION = [];

if(isset($_COOKIE[session_name()])){
    setcookie(session_name(), '', time() - 86400, '/');
}

session_destroy();

header('Location:' . SEITE_URL); 