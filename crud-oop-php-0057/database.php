<?php 
    class Database0057{
        //properti
        public $host = "localhost";
        public $username = "root";
        public $password = "";
        public $database = "db_php0057";
        public $connect;

        function __construct()
        {
            $this->connect = mysqli_connect($this->host, $this->username, $this->password);
            mysqli_select_db($this->connect, $this->database);
                // pengujian koneksi
                // if($this->connect->connect_error){
                //     die ("Koneksi gagal : " . $this->connect->connect_error);
                // }
                // echo "Koneksi Berhasil";
        }

        function tampildata()
        {
            $data = mysqli_query($this->connect, "SELECT * FROM tb_users0057" );
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            // var_dump($rows);
            return $rows;
        }

        function tambahdata($nama, $jenis_kelamin, $umur, $tempat_lahir, $status, $jurusan, $alamat, $nohp)
        {
            mysqli_query($this->connect, "INSERT INTO tb_users0057 VALUE 
            (NULL, '$nama', '$jenis_kelamin', '$umur', '$tempat_lahir', '$status',
             '$jurusan', '$alamat', '$nohp')" );
        }

        function editdata($id)
        {
            $data = mysqli_query($this->connect, "SELECT * FROM tb_users0057 WHERE id=$id");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            return $rows;
        }

        function updateData($id, $nama,  $jenis_kelamin, $umur, $tempat_lahir, $status, $jurusan, $alamat, $nohp)
        {
            mysqli_query($this->connect, "UPDATE `tb_users0057` SET `nama` = '$nama ',
              `jenis_kelamin` ='$jenis_kelamin',  `umur` ='$umur',  `tempat_lahir` ='$tempat_lahir',
                `status` ='$status',  `jurusan` ='$jurusan',
             `alamat` = '$alamat ', `nohp` = '$nohp' WHERE `tb_users0057`.`id` = '$id'");
        }

        function hapusData($id){
            mysqli_query($this->connect, "DELETE FROM tb_users0057 WHERE `tb_users0057`.`id` = '$id'");
        }
        
    }

?>