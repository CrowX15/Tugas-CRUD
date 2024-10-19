<?php

    include "database.php";
    $db = new Database0057;
    $detail = $db-> editdata($_GET['id']);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OPP PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <style>
        body
        {
            background-color:#05284e ;  color: #D0C05B;
        }
    </style>
  </head>
  <body>
    <div class="container mt-3">
        <h1>CRUD OOP PHP</h1>
        <h4>Edit Data</h4>
        <hr class="mt-0">

        <?php
           if (isset($_SESSION['message'])) 
           {
               echo "<div class='alert alert-info'>" . $_SESSION['message'] . "</div>";
               unset($_SESSION['message']);
           }
        ?>

        <!-- Form Tambah Data -->
        <form method="POST" action="proses.php?aksi=update">
            <?php
                foreach ($detail as $dataUser) {
            ?>

                <!-- untuk id menggunakan type hidden karena id tidak di ubah -->
                 <input type="hidden" id="id" name="id" value="<?php echo $dataUser['id']?>">

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" 
                value="<?php echo $dataUser ['nama'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option> <?php echo $dataUser ['jenis_kelamin'] ?> </option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <input type="number" class="form-control" id="umur" name="umur"
                value="<?php echo $dataUser ['umur'] ?> " required>
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                value="<?php echo $dataUser ['tempat_lahir'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan"
                value="<?php echo $dataUser ['jurusan'] ?>" required>
            </div>
            <div class="mb-3">
            <label for="status" class="form-label">Status Pernikahan</label>
                <select name="status" class="form-control" id="status" required>
                    <option><?php echo $dataUser ['status'] ?></option>
                    <option value="Nikah">Nikah</option>
                    <option value="Belum">Belum</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat"
                value="<?php echo $dataUser ['alamat'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="nohp" name="nohp"
                value="<?php echo $dataUser ['nohp'] ?>" required>
            </div>

            <?php
                }
            ?>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-warning" 
            style="position: absolute; top: 30px; right: 50px;"> Gak Jadi ahh...</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>