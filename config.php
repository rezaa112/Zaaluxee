<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Membuat koneksi ke MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
