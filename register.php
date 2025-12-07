<?php
require "db.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $pass     = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$pass')";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        $error = "Gagal menyimpan data!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DraleonX</title>

    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/athena2.png">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<div class="container">
    <img src="assets/img/athena3.png" alt="Logo" class="logo">
    <h2>Register</h2>

    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="register">Register</button>
        <p>Sudah punya akun? <a href="index.php">Login</a></p>
    </form>
</div>
