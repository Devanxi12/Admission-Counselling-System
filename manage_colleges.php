<?php
session_start();
include("db.php");

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

// ✅ DELETE (for both tables)
if(isset($_GET['delete']) && isset($_GET['type'])){
    $id = intval($_GET['delete']);
    $type = $_GET['type'];

    if($type == 'College'){
        mysqli_query($conn, "DELETE FROM colleges WHERE id=$id");
    } 
    else if($type == 'University'){
        mysqli_query($conn, "DELETE FROM universities WHERE id=$id");
    }

    header("Location: manage_colleges.php");
    exit();
}

// ✅ UNION (ALL DATA)
$query = "SELECT id, name, city, type, website, 'University' AS source FROM universities
UNION ALL
SELECT id, name, city, type, website, 'College' AS source FROM colleges";

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Colleges</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>

<div class="main-content">

    <h1>🏫 Manage Colleges</h1>

    <!-- Cards (unchanged) -->
    <div class="cards">
        <div class="card">
            <h3>➕ Add College</h3>
            <p>Add new college</p>
            <a href="add_college.php">Add</a>
        </div>
    </div>

    <!-- Table -->
    <div class="table-container">
        <table>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>City</th>
                <th>Type</th>
                <th>Website</th>
                <th>Category</th>
                <th>Action</th>
            </tr>

            <?php 
            $i = 1;
            while($row = mysqli_fetch_assoc($result)) { 
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['type']; ?></td>
                <td>
                    <?php
                    if(!empty($row['website'])){
                        echo "<a href='".$row['website']."' target='_blank'>Visit</a>";
                    } else {
                        echo "N/A";
                    }
                    ?>
                </td>

                <td><?php echo $row['source']; ?></td>

                <!-- ✅ ACTION -->
                <td>
                    <a href="edit_college.php?id=<?php echo $row['id']; ?>&type=<?php echo $row['source']; ?>">✏️ Edit</a> |
                    <a href="manage_colleges.php?delete=<?php echo $row['id']; ?>&type=<?php echo $row['source']; ?>" 
                       onclick="return confirm('Are you sure to delete?')">🗑️ Delete</a>
                </td>
            </tr>
            <?php } ?>

        </table>
    </div>

</div>

</body>
</html>