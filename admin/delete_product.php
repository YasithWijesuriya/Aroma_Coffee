<?php
session_start();
include("../connect2.php");

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: index.php");
    exit();
}
?>