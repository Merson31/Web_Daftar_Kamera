<?php
require_once "database.php";

// Membuat objek Database
$database = new Database();

// Memanggil metode koneksi() untuk mendapatkan koneksi basis data
$connect = $database->koneksi();

if(function_exists($_GET['function'])){
    $_GET['function']();
}

function insert(){
    global $connect;
    $check = array('id' => '', 'nama' => '', 'deskripsi' => '', 'harga' => '', 'gambar' => '');
    $check_match = count(array_intersect_key($_POST, $check));
    if($check_match == count($check)){
        $result = mysqli_query($connect, "INSERT INTO daftar_kamera SET
        id = '$_POST[id]',
        nama = '$_POST[nama]',
        deskripsi = '$_POST[deskripsi]',
        harga = '$_POST[harga]',
        gambar = '$_POST[gambar]'");

        if($result){
            $respons = array(
                'status' =>1,
                'message' => 'Insert Data Sukses'
            );
        }
        else{
            $respons = array(
                'status' =>0,
                'message' => 'Gagal Insert Data'
            );
        }
    }else{
        $respons = array(
            'status' =>0,
            'message' => 'Parameternya Salah'
        );
    }
    header('Content-Type:application/json');
    echo json_encode($respons);
}

function get(){
    global $connect;
    $query = $connect -> query("SELECT * FROM daftar_kamera");
    while($row=mysqli_fetch_object($query)){
        $data[]=$row;
    }
    $respons=array(
        'status' =>1,
        'message' => 'Sukses Menampilkan Data',
        'data' => $data
    );
    header('Content-Type:application/json');
    echo json_encode($respons);
}

function get_id(){
    global $connect;
    if(!empty($_GET["id"])){
        $id=$_GET["id"];
    }
    $query = "SELECT * FROM daftar_kamera WHERE id=$id";
    $result = $connect->query($query);
    while($row = mysqli_fetch_object($result)){
        $data[]=$row;
    }
    if($data){
        $respons=array(
            'status' => 1,
            'message' => 'Sukses Menampilkan Data Berdasarkan ID',
            'data' => $data
        );
    }
    else{
        $respons=array(
            'status' => 0,
            'message' => 'Data Tidak Ditemukan'
        );
    }
    header('Content-Type:application/json');
    echo json_encode($respons);
}

function update(){
    global $connect;
    if(!empty($_GET["id"])){
        $id=$_GET["id"];
    }
    $check=array('nama' => '', 'deskripsi' => '', 'harga' => '', 'gambar' => '');
    $check_match=count(array_intersect_key($_POST, $check));
    if($check_match == count($check)){
        $result=mysqli_query($connect, "UPDATE daftar_kamera SET
        nama = '$_POST[nama]',
        deskripsi = '$_POST[deskripsi]',
        harga = '$_POST[harga]',
        gambar = '$_POST[gambar]' WHERE id=$id");
        if($result){
            $respons=array(
                'status' => 1,
                'message' => 'Update Data Berhasil'
            );
        }
        else{
            $respons=array(
                'status' => 0,
                'message' => 'Gagal Mengupdate Data'
            );
        }
    }else{
        $respons=array(
            'status' => 0,
            'message' => 'Parameter Salah',
            'data' => $id
        );
    }
    header('Content-Type:application/json');
    echo json_encode($respons);
}

function hapus(){
    global $connect;
    $id=$_GET['id'];
    $query = "DELETE FROM daftar_kamera WHERE id=$id";
    if(mysqli_query($connect, $query)){
        $respons=array(
            'status' => 1,
            'message' => 'Hapus Data Berhasil'
        );
    }
    else{
        $respons=array(
            'status' => 0,
            'message' => 'Gagal Menghapus Data'
        );
    }
    header('Content-Type:application/json');
    echo json_encode($respons);
}