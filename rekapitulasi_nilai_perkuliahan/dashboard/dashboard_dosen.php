<?php
session_start();
include 'header.php';
include '../config/config.php';
if (!isset($_SESSION['Akses']) || $_SESSION['role'] != 'dosen'){
    header("location:../index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dosen</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body class="dashboard-dosen">
    <div class="tampilkan-dashboard-dosen">
        <h2>Dashboard Dosen</h2>
    </div>
    <div class="tampilkan-data-mahasiswa">
        <div class="data-nilai-mahasiswa">

        </div>
    </div>
    <div>
        <a></a>
        <a></a>
    </div>
</body>

</html>