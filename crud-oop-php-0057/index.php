<?php

    session_start();
    include 'database.php';
    $db = new Database0057;
    $db->tampildata();
    if (isset($_SESSION['message'])) 
    {
        echo '<div class="alert alert-success">' . $_SESSION['message'] . '</div>';
        unset($_SESSION['message']); // Hapus pesan setelah ditampilkan
    }
    
  
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
            color: #024259;
            
        }
    </style>
  </head>
  <body>
    <div class="container mt-3">
        <h1>CRUD OPP PHP</h1>
        <hr>
        <!-- tombol tambah data -->
        <a href="input.php" class="btn btn-success">Tambah Data</a>
        <hr>
        <!--Tabel untuk Menampilkan-->
        <table class="table table_hover">
        <thead >
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No_HP</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $nomer = 1;
                foreach ($db->tampildata() as $dataUser) {

        ?>

            <tr>
                <th scope="row"> <?php echo $nomer++; ?> </th>
                <td><?php echo $dataUser ['nama'];?></td>
                <td><?php echo $dataUser ['alamat'];?></td>
                <td><?php echo $dataUser ['nohp'];?></td>
                <td>
                    <a href="edit.php?id=<?php echo $dataUser['id']?>" 
                    class="btn btn-warning btn-sm">Edit</a>
                    <a href="proses.php?id=<?php echo $dataUser['id']?>&aksi=hapus"
                     class="btn btn-danger btn-sm"
                     onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                     >Hapus</a>
                     <!-- Tombol Detail untuk menampilkan card -->
                     <a href="detail.php?id=<?php echo $dataUser['id']?>"
                      class="btn btn-info btn-sm">Detail</a>


                </td>

            </tr>
            <?php
                }
            ?>
        </tbody>
        </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
     crossorigin="anonymous"></script>
  </body>
</html>