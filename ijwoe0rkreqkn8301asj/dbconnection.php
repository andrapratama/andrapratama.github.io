<?php
// Konfigurasi koneksi ke database
$host = "localhost"; // Host MySQL
$username = "andr3734_andra"; // Username MySQL
$password = "MyPass@word!"; // Password MySQL
$database = "andr3734_undangan"; // Nama Database

// Buat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>