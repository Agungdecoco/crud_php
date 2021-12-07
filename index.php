<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Aplikasi Daftar Nilai</title>
  </head>
  <body>
    <h1 align="center">Daftar Mahasiswa</h1>
    <hr>
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="forModal">
      Tambah Barang
    </button> -->
    <nav class="nav nav-pills">
      <a class="nav-item nav-link active" href="halaman_tambah.php">TAMBAH MAHASISWA</a>
    </nav>
    <br>
      <table class="table table-bordered table-hover">
        <thead align="center">
          <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Nilai UAS</th>
            <th>Nilai UAS</th>
            <th>Nilai Tugas</th>
            <th>Rata-Rata</th>
            <th>IPK</th>
          </tr>
        </thead>
        <tbody align="center">
          <?php
          include 'koneksi.php';
          $no = 1;
          $query = mysqli_query($conn, "select * from mahasiswa");
          while ($a = mysqli_fetch_array($query)) {
            ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $a['nim']; ?></td>
              <td><?= $a['nama']; ?></td>
              <td><?= $a['nilai_uas']; ?></td>
              <td><?= $a['nilai_uts']; ?></td>
              <td><?= $a['nilai_tugas']; ?></td>
              <td><?= $a['mean']; ?></td>
              <td><?= $a['ipk']; ?></td>
              <td>
                <a href="halaman_edit.php?nim=<?= $a['nim']; ?>" class="badge">
                  <font size="3">
                    Edit
                  </font>
                </a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Hapus
                </button>
              </td>
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>


      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Apakah Anda yakin ingin menghapus data tersebut?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
              <button type="button" href="hapus.php?nim=<?= $a['nim']; ?>" class="btn btn-primary">Iya</button>
            </div>
          </div>
        </div>
      </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
