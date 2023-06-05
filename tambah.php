<?php
include 'proses.php';
if (isset($_POST['simpan']))
{
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    $gambar = $_FILES['gambar']['name'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($file_tmp, 'file_gambar/'.$gambar);

    $proses = new Proses();
    $proses->tambah_data($nama, $deskripsi, $harga, $gambar);
    header('location:index.php');
}
?>