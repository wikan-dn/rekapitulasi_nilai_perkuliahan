<?php 
$databaseServer = "localhost";
$databaseUsername = "root";
$databasePassword = "";
$databaseName = "rekapitulasi_nilai";

// Menyambungkan ke database
$databaseConnect = mysqli_connect($databaseServer, $databaseUsername, $databasePassword, $databaseName);

if(!$databaseConnect){
    die("Ada masalah koneksi ke Database: " . mysqli_connect_error());
}
?>