<?php
session_start();

// restore session
if(!isset($_SESSION['user']) && isset($_COOKIE['user'])){
    $_SESSION['user'] = $_COOKIE['user'];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- NAVBAR -->
<nav>
<a href="index.php">Home</a>

<?php if(isset($_SESSION['user'])): ?>
    👤 <?php echo $_SESSION['user']; ?>
    <a href="logout.php">Logout</a>
<?php else: ?>
    <a href="login.html">Login</a>
<?php endif; ?>
</nav>

<h2>Contact Us</h2>

</body>
</html>