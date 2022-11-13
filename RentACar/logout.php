<?php
    include 'inc/functions.php';
    unset($_SESSION['user']);
    header("Location: index.php");
?>