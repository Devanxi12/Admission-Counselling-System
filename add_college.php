<?php
include("db.php");

if(isset($_POST['submit']))
{
    $name = trim($_POST['name']);
    $city = trim($_POST['city']);
    $type = trim($_POST['type']);
    $website = trim($_POST['website']);

    // Check if college already exists
    $check = mysqli_query($conn,
        "SELECT * FROM colleges
         WHERE name='$name' AND city='$city'"
    );

    if(mysqli_num_rows($check) > 0)
    {
        echo "<script>
                alert('College already exists in this city!');
              </script>";
    }
    else
    {
        $query = "INSERT INTO colleges(name, city, type, website)
                  VALUES('$name', '$city', '$type', '$website')";

        if(mysqli_query($conn, $query))
        {
            echo "<script>
                    alert('College Added Successfully!');
                    window.location='manage_colleges.php';
                  </script>";
            exit();
        }
        else
        {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add College</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>Admin</h2>
    <a href="admin_dashboard.php">Dashboard</a>
    <a href="manage_colleges.php">Colleges</a>
</div>

<!-- Main Content -->
<div class="main-content">

    <h2>Add College</h2>

    <div class="form-container">
        <form method="POST">
            <input type="text" name="name" placeholder="College Name" required>
            <input type="text" name="city" placeholder="City" required>

            <select name="type" required>
                <option value="">Select Type</option>
                <option>Private</option>
                <option>Government</option>
            </select>

            <input type="text" name="website" placeholder="Website">

            <button type="submit" name="submit">Add College</button>
        </form>
    </div>

</div>

</body>
</html>