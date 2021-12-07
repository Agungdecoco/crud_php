<?php
include 'koneksi.php';

$id = $_GET['nim'];

mysqli_query($conn, "delete from mahasiswa where nim='$id'");
header('location:index.php')
?>
