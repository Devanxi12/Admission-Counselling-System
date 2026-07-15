<?php
session_start();
include("db.php");

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

$result = mysqli_query($conn,
"SELECT * FROM students WHERE status='Deleted'");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Deleted Users</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>

<div class="main-content">
    <h2>Deleted Users</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php while($row=mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>

            <td>
                <a href="restore_user.php?id=<?php echo $row['id']; ?>">
                    Restore
                </a>
            </td>
        </tr>
        <?php } ?>

    </table>

    <a href="admin_dashboard.php">Back</a>
</div>

</body>
</html>