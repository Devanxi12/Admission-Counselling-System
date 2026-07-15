<?php

$email = $_POST['email'];
$password = $_POST['password'];

if($email == "admin@gmail.com" && $password == "1234")
{
    header("Location: dashboard.php");
}
else
{
    echo "Invalid Login";
}

?>