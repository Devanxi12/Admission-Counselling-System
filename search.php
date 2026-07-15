<?php
include("db.php");

$query = "";

if(isset($_GET['query'])){
    $query = mysqli_real_escape_string($conn, $_GET['query']);

    // Search Universities
    $sql1 = "SELECT name, city, type, website, 'University' AS category 
             FROM universities 
             WHERE name LIKE '%$query%' OR city LIKE '%$query%'";

    // Search Colleges
    $sql2 = "SELECT name, city, type, website, 'College' AS category 
             FROM colleges 
             WHERE name LIKE '%$query%' OR city LIKE '%$query%'";

    // Combine both
    $sql = "$sql1 UNION $sql2";

    $result = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>

<h2 style="text-align:center;">Search Results for "<?php echo $query; ?>"</h2>

<br><br>

<div class="table-container">
<table>
    <tr>
        <th>Name</th>
        <th>City</th>
        <th>Type</th>
        <th>Category</th>
        <th>Website</th>
    </tr>

<?php
if(isset($result) && mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td>
                <?php 
                if(!empty($row['website'])) {

                    $url = $row['website'];

                    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
                        $url = "https://" . $url;
                    }

                    echo "<a href='".$url."' target='_blank'>Visit</a>";

                } else {
                    echo "N/A";
                }
                ?>
            </td>
        </tr>
        
<?php
    }
} else {
    echo "<tr><td colspan='5'>No results found</td></tr>";
}
?>

</table>
<br>
<br>
<center> <a class="back-link" href="index.php">⬅ Back to Home</a></center>
</div>

</body>
</html>