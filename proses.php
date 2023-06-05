<?php
include 'database.php';
class Proses extends Database
{
    public function __construct()
    {
        $this->connect = $this->koneksi();
    }

    public function tampil_data()
    {
        $sql = "SELECT * FROM daftar_kamera";
        $bind = $this->connect->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function tambah_data($nama, $deskripsi, $harga, $gambar)
    {
        $sql = "INSERT INTO daftar_kamera (nama,deskripsi,harga,gambar) VALUES ('$nama', '$deskripsi', '$harga', '$gambar')";
        $this->connect->query($sql);
    }

    public function ubah($id)
    {
        $sql = "SELECT * FROM daftar_kamera WHERE id = '$id'";
        $bind = $this->connect->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function ubah_data($id, $nama, $deskripsi, $harga, $gambar)
    {
        $sql = "UPDATE daftar_kamera SET nama = '$nama', deskripsi = '$deskripsi', harga = '$harga', gambar= '$gambar' WHERE id = '$id'";
        $this->connect->query($sql);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM daftar_kamera WHERE id = '$id'";
        $this->connect->query($sql);
    }
}
?>