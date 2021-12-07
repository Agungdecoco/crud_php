<?php

include 'koneksi.php';
include 'konversi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$uas = $_POST['uas'];
$uts = $_POST['uts'];
$tugas = $_POST['tugas'];
$mean = ($uas+$uts+$tugas)/3;
$_POST['mean'] = $mean;
$ipk = konversi($mean);
$_POST['ipk'] = $ipk;

mysqli_query($conn, "update mahasiswa set nama='$nama', nilai_uas='$uas', nilai_uts='$uts', nilai_tugas='$tugas', mean='$mean', ipk='$ipk' where nim='$nim'");

header('location:index.php');
?>
