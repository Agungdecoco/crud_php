<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'data_mahasiswa';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
  echo "Gagal";
} else {
  echo "oke";
}

?>
