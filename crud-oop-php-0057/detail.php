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
    <title>Detail Informasi Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

    <style>
        body {
            display: flex;
            justify-content: center; 
            align-items: center;    
            height: 100vh;         
            margin: 0;             
            background-color: #05284e; 
        }
    </style>

  </head>
  <body>

  <?php foreach ($detail as $dataUser)?>

  <div class="card mb-3" style="max-width: 1000px; 
  border: 2px solid #D0C05B; padding: 20px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
   background-color: #D0C05B;  color: #05284e;" justify-content: center; >
    <div class="row g-0">
      <div class="col-md-4">
        <img src="Backgroudn.webp" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title"><B> Detail Informasi </B> </h3>
          <h5 class="card-text">Nama : <?php echo $dataUser['nama']; ?></h5>
          <h5 class="card-text">Jenis Kelamin : <?php echo $dataUser['jenis_kelamin']; ?></h5>
          <h5 class="card-text">Umur : <?php echo $dataUser['umur']; ?></h5>
          <h5 class="card-text">Tempat Lahir : <?php echo $dataUser['tempat_lahir']; ?></h5>
          <h5 class="card-text">Status Pernikahan : <?php echo $dataUser['status']; ?></h5>
          <h5 class="card-text">Jurusan : <?php echo $dataUser['jurusan']; ?></h5>
          <h5 class="card-text">Alamat : <?php echo $dataUser['alamat']; ?></h5>
          <h5 class="card-text">No_HP : <?php echo $dataUser['nohp']; ?></h5>
        </div>
      </div>
    </div>
    
  </div>

  <a href="index.php?"class="btn btn-info"style="position: absolute; top: 30px; right: 50px;"><B>Kembali</B></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>