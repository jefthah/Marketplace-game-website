<?php
$host = 'localhost';
$username = 'login';
$password = '123456';
$database = 'databaselogin';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
?>
