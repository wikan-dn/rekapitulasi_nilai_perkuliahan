<?php 
session_start();

// Hak akses login sebagai?
if (isset($_SESSION["akses"]) && $_SESSION["akses"] == true) {
    if (isset($_SESSION["role"])) {
        if ($_SESSION["role"] == 'admin') {
            header("location:dashboard/dashboard_admin.php");
        } else if ($_SESSION["role"] == 'dosen') {
            header("location:dashboard/dashboard_dosen.php");
        } else if ($_SESSION["role"] == 'mahasiswa') {
            header("location:dashboard/dashboard_mahasiswa.php");
        }
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekapitulasi Nilai Perkuliahan</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body class="login-form-user">
    <!-- Login Form Start -->
    <div class="login-form">
        <form action="controller/authenticate.php" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input name="usernameLogin" type="text" placeholder="Username" required="Username harus di isi!">
            </div>
            <div class="input-box">
                <input name="passwordLogin" type="password" placeholder="Password" required="Password harus di Isi!">
            </div>
            <button class="login-btn" type="submit">Login</button>
            <div class="register-form">
                <p>Tidak punya akun?<a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
    <!-- Login Form End -->
</body>

</html>