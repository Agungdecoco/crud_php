<?php
include 'koneksi.php';
include 'konversi.php';

$nim = $_POST['nim'];
$nama = $_POST['name'];
$uas = $_POST['uas'];
$uts = $_POST['uts'];
$tugas = $_POST['tugas'];
$mean = ($uas+$uts+$tugas)/3;
$_POST['mean'] = $mean;
$ipk = konversi($mean);
$_POST['ipk'] = $ipk;

$query = mysqli_query($conn, "insert into mahasiswa values('$nim','$nama','$uas','$uts','$tugas', '$mean', '$ipk')");

header('location:index.php')
?>
