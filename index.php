<?php
session_start();
require "db.php";

// Amankan session
session_regenerate_id(true);

if (isset($_POST['login'])) {

    // Bersihkan input
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Cek input kosong
    if ($username === "" || $password === "") {
        $error = "Username dan password wajib diisi!";
    } else {

        // Prepared statement = anti SQL Injection
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        // Verifikasi password yang di-hash
        if ($user && password_verify($password, $user['password'])) {

            // Buat session aman
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user"] = $user["username"];

            // Regenerate session ID untuk keamanan
            session_regenerate_id(true);

            header("Location: home.php");
            exit;

        } else {
            $error = "Username atau password salah!";
        }
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

<body>

<div class="container">

    <img src="assets/img/athena3.png" alt="Logo" class="logo">

    <h2>Login</h2>

    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>

        <p>Belum punya akun? <a href="register.php">Register</a></p>
    </form>
</div>

</body>
</html>

