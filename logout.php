<?php
function logout() {
    setcookie("username", "",0, "/");
    setcookie("session_id", "",0, "/");

    header("Location: index.php");
    exit();
}
logout();
?>
