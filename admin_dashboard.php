<?php
session_start();
include("db.php");

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

// Count users
$user_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM students"));
// Count messages
$msg_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM contact"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="admin_dashboard.php">Dashboard</a>
    <a href="users.php">Users</a>
    <a href="messages.php">Messages</a>
    <a href="manage_colleges.php">Manage Universities</a>
    <a href="admin_logout.php">Logout</a>
</div>

<!-- Main Content -->
<div class="main-content">
    <h1>Welcome, <?php echo $_SESSION['admin']; ?>!</h1>

    <!-- Cards -->
    <div class="cards">

<div class="card">
    <h3>👨‍🎓 Total Users</h3>
    <p><?php echo $user_count; ?></p>
    <a href="users.php">View</a>
</div>

<div class="card">
    <h3>💬 Messages</h3>
    <p><?php echo $msg_count; ?></p>
    <a href="messages.php">View</a>
</div>

</div>

    <!-- Optional: Recent Users Table -->
    <div class="table-container">
        <h2>Recent Users</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Registered On</th>
            </tr>
            <?php
            $res = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC LIMIT 5");
            while($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['created_at']}</td>
                      </tr>";
            }
            ?>
        </table>
    </div>
</div>

</body>
</html>