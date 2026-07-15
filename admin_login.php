<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Static admin login (you can later connect DB)
    if ($email == "devanxi@gmail.com" && $password == "1202") {
        $_SESSION['admin'] = $email;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        $error = "Invalid Email or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #dfe9f3, #ffffff);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-container {
    width: 400px;
    background: #f5f5f5;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0px 5px 20px rgba(0,0,0,0.1);
    text-align: center;
}

.login-container h1 {
    margin-bottom: 10px;
    font-size: 32px;
    color: #333;
}

.login-container p {
    color: #777;
    margin-bottom: 30px;
}

.form-group {
    text-align: left;
    margin-bottom: 20px;
}

label {
    font-size: 14px;
    color: #333;
}

input {
    width: 100%;
    padding: 12px;
    margin-top: 5px;
    border-radius: 8px;
    border: 1px solid #ccc;
    outline: none;
    font-size: 14px;
}

input:focus {
    border-color: #2d89ef;
}

.login-btn {
    width: 100%;
    padding: 12px;
    background: #2d89ef;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
    transition: 0.3s;
}

.login-btn:hover {
    background: #1b5fbf;
}

.error {
    color: red;
    margin-bottom: 10px;
    font-size: 14px;
}

.bottom-text {
    margin-top: 15px;
    color: orange;
    font-size: 14px;
}
</style>

</head>
<body>

<div class="login-container">
    <h1>Admin Login</h1>
    <p>Login to access your admin dashboard</p>

    <!-- Error Message -->
    <?php if($error != "") { ?>
        <div class="error"><?php echo $error; ?></div>
    <?php } ?>

    <form method="POST">
        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
        </div>

        <button type="submit" class="login-btn">Login</button>
    </form>

    <div class="bottom-text">
        Only admin can login here
    </div>
</div>

</body>
</html>