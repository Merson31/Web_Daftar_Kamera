<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">

    <title>Tambah Data Kamera</title>

</head>
<body>
  <div class="container" style="width: 38rem;">
    <div class="card mt-5">
      <div class="card-header bg-warning text-white">
        <center><h5>Form Pengisian Daftar Spesifikasi dan Harga Kamera</h5></center> 
      </div>
      <div class="card-body">
        <form action="tambah.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Merek Kamera</label>
            <input type="text" class="form-control" name="nama">
          </div>
          <br>
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea type="text" class="form-control" name="deskripsi"></textarea>
          </div>
          <br>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" name="harga">
          </div>

          <br>
          <div class="form-group">
            <label>Pilih Gambar:</label>
            <input type="file" class="form-control" name="gambar">
          </div>

          <br>
          <button type="submit" class="btn btn-danger" name="simpan">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>