<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Aplikasi Daftar Nilai</title>
  </head>
  <body>
    <h1 align="center ">Formulir Input Data</h1>
    <hr>
      <form class="" action="tambah.php" method="post" style="width:200px">
        <div class="form-group">
          <label for="name" class="form-label">Nama</label>
          <input class="form-control" type="text" name="name" id="name">
        </div>
        <div class="form-group">
          <label for="nim" class="form-label">NIM</label>
          <input class="form-control" type="text" name="nim" id="nim">
        </div>
        <div class="form-group">
          <label for="uas" class="form-label">Nilai UAS</label>
          <input class="form-control" type="number" name="uas" id="uas">
        </div>
        <div class="form-group">
          <label for="uts" class="form-label">Nilai UTS</label>
          <input class="form-control" type="number" name="uts" id="uts">
        </div>
        <div class="form-group">
          <label for="tugas" class="form-label">Nilai Tugas</label>
          <input class="form-control" type="number" name="tugas" id="tugas">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
