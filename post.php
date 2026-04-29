<?php
session_start();

if (!empty($_POST["username"])) {
    $_SESSION['username'] = trim($_POST['username']);
}

header('Location: index.php');
exit;