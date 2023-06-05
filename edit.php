<?php
include 'proses.php';
if (isset($_POST['simpan']))
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    $gambar = $_POST['gambar'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($file_tmp, 'file_gambar/'.$gambar);

    $proses = new Proses();
    $proses->ubah_data($id, $nama, $deskripsi, $harga, $gambar);
    header('location:index.php');
}
?>