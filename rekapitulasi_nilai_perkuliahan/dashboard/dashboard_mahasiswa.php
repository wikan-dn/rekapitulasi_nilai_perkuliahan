<?php 
session_start();
include '../config/config.php';
include 'header.php';

if (!isset($_SESSION['Akses']) || $_SESSION ['role'] != 'mahasiswa') {
    header("location:../index.php");
    exit;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body class="dashboard-mahasiswa">
    <div class="tampilkan-dashboard-mahasiswa">
        <h2>Dashboard Mahasiswa</h2>
    </div>


    </div>
</body>

</html>