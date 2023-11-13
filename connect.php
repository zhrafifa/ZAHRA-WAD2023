<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$dbhost = "localhost";
$dbuser = "root";
$dbname = "db_wad_modul3";
$dbpass = "";

$conn = mysqli_connect("localhost:3308", "root", "", "db_wad_modul3");
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
// 
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
?>