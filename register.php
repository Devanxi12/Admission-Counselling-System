<?php
include 'db.php';

if (isset($_POST['register'])) {

    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass  = $_POST['password'];
    $cpass = $_POST['cpass'];

    // 1. Check empty fields
    if ($name=="" || $email=="" || $phone=="" || $pass=="" || $cpass=="") {
        die("All fields are required");
    }

    // 2. Check password match
    if ($pass !== $cpass) {
        die("Passwords do not match");
    }

    // 3. Hash password
    $hashed = password_hash($pass, PASSWORD_DEFAULT);

    // 4. Insert data
    $sql = "INSERT INTO students (name, email, phone, password)
        VALUES ('$name', '$email', '$phone', '$hashed')";

    if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Registration Successful!');
            window.location.href='login.html';
          </script>";
    exit();
}
}
?>
