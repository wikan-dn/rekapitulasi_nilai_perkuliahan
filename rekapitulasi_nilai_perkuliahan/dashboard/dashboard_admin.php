<?php
session_start();
include 'header.php';
include '../function/tambah_data.php';
include '../config/config.php';

$role = $_SESSION['role'] ?? 'admin';
// Hak akses hanya Admin
if (!isset($_SESSION['Akses']) || $_SESSION['role'] != 'admin') {
    header("location:../index.php");
    exit;
}

// Menampilkan data dari database 
$sqlTableAdmin = "SELECT * FROM users_5077";
$data_user = mysqli_query($databaseConnect, $sqlTableAdmin);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body class="dashboard-admin">
    <!-- Menampilkan Login Admin -->
    <div class="tampilkan-admin">
        <h2>Dashboard Admin</h2>
    </div>
    <!-- Tambah data start -->
    <div class="add-data-users">
        <h2>Tambah Data Pengguna</h2>
        <form class="form-add-user" action="../function/tambah_data.php" method="POST">
            <label class="add-user" for="idusers">Id:</label>
            <input class="input-add-user" type="text" name="add_id" required><br>

            <label class="add-user" for="username">Username:</label>
            <input class="input-add-user" type=" text" name="add_username" required><br>

            <label class="add-user" for="password">Password:</label>
            <input class="input-add-user" type=" password" name="add_password" required><br>

            <label class="add-user" for="name">Nama Lengkap:</label>
            <input class="input-add-user" type=" text" name="add_name" required><br>

            <label class="add-user" for="role">Role:</label>
            <select class="select-role-user" name="add_role" required>
                <option class="choose-user" value="mahasiswa">Mahasiswa</option>
                <option class="choose-user" value="dosen">Dosen</option>
            </select><br>

            <button class="submit-add-user" type="submit">Tambah Pengguna</button>
        </form>
    </div>
    <!-- Tambah data end -->

    <div class="link-data-users">
        <a href="data_dosen.php">Data Dosen</a>
        <a href="data_mahasiswa.php">Data Mahasiswa</a>
    </div>

</body>

</html>