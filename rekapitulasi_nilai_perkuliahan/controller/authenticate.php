<?php
include "../config/config.php";
session_start();

$username_login = $_POST["usernameLogin"];
$password_login = $_POST["passwordLogin"];

if (!empty($username_login) && !empty($password_login)) {
    // Query untuk mengambil data user berdasarkan username
    $data_user = mysqli_query($databaseConnect, "SELECT * FROM users_5077 WHERE username_pengguna='$username_login'");
    
    // Mengecek apakah data user ditemukan
    if ($result_users = mysqli_fetch_assoc($data_user)) {
        // Membandingkan password langsung
        if ($password_login === $result_users['password_pengguna']) {
            $_SESSION["Akses"] = true;
            $_SESSION["username"] = $result_users["username_pengguna"];
            $_SESSION["id"] = $result_users["id_pengguna"];
            $_SESSION["name"] = $result_users["name_pengguna"];
            $_SESSION["role"] = $result_users["role"];

            // Cek role dan arahkan ke halaman dashboard yang sesuai
            if ($result_users["role"] == 'admin') {
                header("location:../dashboard/dashboard_admin.php");
                
            } elseif ($result_users["role"] == 'dosen') {
                header("location:../dashboard/dashboard_dosen.php");
    
            } elseif ($result_users["role"] == 'mahasiswa') {
                header("location:../dashboard/dashboard_mahasiswa.php");
            } exit;
          
        } else {
            $_SESSION["Error"] = "Username atau Password salah!";
        }
    } else {
        $_SESSION["Error"] = "Username atau Password salah!";
    }
    header("location:../index.php?app=gagal");
} else {
    $_SESSION["Error"] = "Username atau Password tidak boleh kosong!";
    header("location:../index.php?app=error");
}
?>