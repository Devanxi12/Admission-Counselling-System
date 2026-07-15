<?php
session_start();
include("db.php");
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM contact");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>



<!-- Main Content -->
<div class="main-content">
    <h2>All Messages</h2>

    <div class="table-container">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Messages</th>
            </tr>

            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['message']; ?></td>
            </tr>
            <?php } ?>

        </table>
    </div>
    <a class="back-link" href="admin_dashboard.php">⬅ Back to Home</a>
</div>

</body>
</html>