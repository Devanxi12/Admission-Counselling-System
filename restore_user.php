<?php
session_start();
include("db.php");

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

$id = intval($_GET['id']);

$stmt = $conn->prepare("UPDATE students SET status='Active' WHERE id=?");
$stmt->bind_param("i", $id);

if($stmt->execute()){
    header("Location: deleted_users.php");
    exit();
}else{
    echo "Error restoring user.";
}
?>