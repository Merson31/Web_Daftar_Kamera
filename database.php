<?php
class Database
{
    protected $connect;

    public function koneksi()
    {
        $host = "localhost";
        $database = "db_daftar_kamera";
        $username = "root";
        $password = "";
    
        $connect = new mysqli($host, $username, $password, $database);
        return $connect;
    }
}
?>