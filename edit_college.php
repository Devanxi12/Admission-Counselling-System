<?php
session_start();
include("db.php");

$id = intval($_GET['id']);

$result = mysqli_query($conn, "SELECT * FROM colleges WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
    $stmt = $conn->prepare("UPDATE colleges SET name=?, city=?, type=?, website=? WHERE id=?");
    $stmt->bind_param("ssssi", $_POST['name'], $_POST['city'], $_POST['type'], $_POST['website'], $id);
    $stmt->execute();

    header("Location: manage_colleges.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit College</title>
    <link rel="stylesheet" href="admin_style.css">
</head>

<body>

<div class="main-content">

    <h2>✏️ Edit College</h2>

    <div class="form-container">
        <form method="POST">
            <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
            
            <input type="text" name="city" value="<?php echo $row['city']; ?>" required>

            <select name="type" required>
                <option value="<?php echo $row['type']; ?>"><?php echo $row['type']; ?></option>
                <option>Engineering</option>
                <option>Commerce</option>
                <option>Arts</option>
                <option>Science</option>
            </select>

            <input type="text" name="website" value="<?php echo $row['website']; ?>">

            <button type="submit" name="update">Update College</button>
        </form>
    </div>

</div>

</body>
</html>