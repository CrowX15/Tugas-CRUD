<?php 
include 'database.php';
$db = new Database0057;

$aksi = $_GET['aksi'];
session_start();

if ($aksi == "tambah") 
{
    $db->tambahdata($_POST['nama'], $_POST['jenis_kelamin'], $_POST['umur'],
     $_POST['tempat_lahir'], $_POST['status'], $_POST['jurusan'],
       $_POST['alamat'], $_POST['nohp']);
       $_SESSION['message'] = 'Data berhasil ditambahkan!';
       
    header("location:index.php");
} 
elseif ($aksi == "update") 
{
    $db->updatedata($_POST['id'], $_POST['nama'],
    $_POST['jenis_kelamin'], $_POST['umur'],
    $_POST['tempat_lahir'], $_POST['status'], $_POST['jurusan'],
     $_POST['alamat'], $_POST['nohp']);
    $_SESSION['message'] = 'Data berhasil diupdate!';
    header("location:index.php");
} 
elseif($aksi == "hapus")
{
    $db->hapusdata($_GET['id']);
    $_SESSION['message'] = 'Data berhasil dihapus!';
    header("location:index.php");
}

?>