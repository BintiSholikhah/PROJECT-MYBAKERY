<?php
include 'koneksi.php';
// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mendapatkan username dari parameter GET
$username = $_GET["username"];

// Melakukan validasi apakah username sudah digunakan
$query = "SELECT * FROM login WHERE username='$username'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Username sudah digunakan, tampilkan pesan kesalahan
    echo "Username sudah digunakan. Silakan pilih username lain.";
} else {
    // Username belum digunakan
    echo "";
}

// Menutup koneksi
$conn->close();
?>
