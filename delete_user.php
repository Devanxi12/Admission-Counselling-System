<?php
session_start();
include("db.php");

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

$id = intval($_GET['id']);

$stmt = $conn->prepare("UPDATE students SET status='Deleted' WHERE id=?");
$stmt->bind_param("i", $id);

if($stmt->execute()){
    header("Location: users.php");
    exit();
}else{
    echo "Error deleting user.";
}
?>