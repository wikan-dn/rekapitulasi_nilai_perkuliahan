<?php
require '../config/config.php';

// Admin dapat menambahkan data Mahasiswa dan Dosen.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $add_id_users = $_POST['add_id'];
    $add_username_users = $_POST['add_username'];
    $add_password_users = $_POST['add_password'];
    $add_name_users = $_POST['add_name'];
    $add_role_users = $_POST['add_role'];

    // Insert ke tabel users_5077
    $data_user = "INSERT INTO users_5077 (id_pengguna, username_pengguna, password_pengguna, name_pengguna, role) VALUES ('$add_id_users', '$add_username_users', '$add_password_users', '$add_name_users', '$add_role_users')";

    if (mysqli_query($databaseConnect, $data_user)) {
        echo "Pengguna berhasil ditambahkan!";
        header("Location: ../dashboard/dashboard_admin.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($databaseConnect);
    }
}
?>