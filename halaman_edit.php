<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Aplikasi Daftar Nilai</title>
  </head>
  <body>
    <h1>Edit Data</h1>
    <hr>
    <?php

    include 'koneksi.php';

    $id = $_GET['nim'];

    $query = mysqli_query($conn, "select * from mahasiswa where nim='$id'");
    while($a = mysqli_fetch_array($query)){
      ?>
      <form class="" action="update.php" method="post">
        <table>
          <ul>
            <li>
              <label for="">NIM</label><br>
              <label for=""><?= $a['nim']; ?></label>
            </li>
            <li>
              <label for="">Nama</label><br>
              <input type="hidden" name="nim" value="<?= $a['nim']; ?>">
              <input type="text" name="nama" value="<?= $a['nama']; ?>">
            </li>
            <li>
              <label for="">Nilai UAS</label><br>
              <input type="number" name="uas" value="<?= $a['nilai_uas']; ?>">
            </li>
            <li>
              <label for="">Nilai UTS</label><br>
              <input type="number" name="uts" value="<?= $a['nilai_uts']; ?>">
            </li>
            <li>
              <label for="">Nilai Tugas</label><br>
              <input type="number" name="tugas" value="<?= $a['nilai_tugas']; ?>">
            </li>
            <?php
          }
             ?>
          <input type="submit" name="save" value="SIMPAN">
        </ul>
      </table>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
