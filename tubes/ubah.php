<?php

require 'functions.php';

// Query data content berdasarkan id
$id =$_GET["id"];
$con = query("SELECT * FROM content WHERE id = $id") [0];



// cek apakah tombol tambah sudah di klik
if(isset($_POST["ubah"]) ) {
    if(ubah($_POST) > 0) {
        echo "<script>
            alert('Data Successfully Changed!');
            document.location.href = 'deskripsiadmin.php';
        </script>";
    }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ubah Data Mahasiswa</title>
    <style> 
    body {
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7)), url(img/bgubah.jpg);
    background-position: center;
    background-size:cover;
    position:relative;
    color: white;
    }

    .aaa {
        margin-top: 50px;
        margin-left: 115px;
        margin-bottom: 50px;
    }


</style>
  </head>
  <body>
      <div class="aaa">
  <a href="deskripsiadmin.php" class="btn btn-primary">Back To Description Part On Metaverse</a>
    </div>
    <div class="container">
        <h1>Change Data</h1>

        

        <div class="row mt-3">
            <div class="col-8">
                <form action="" method="post" autocomplete="off">
                <input type="hidden" name="id" value="<?= $con["id"] ?>">
                <div class="mb-3">
                    <label for="nama" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nama" name="nama" required  value= "<?=$con ["nama"] ?>"> 
                </div>

                <div class="mb-3">
                    <label for="fungsi" class="form-label">Function</label>
                    <input type="text" class="form-control" id="fungsi" name="fungsi" required value= "<?=$con ["fungsi"] ?>">
                </div>

                <div class="mb-3">
                    <label for="bentuk" class="form-label">Format</label>
                    <input type="text" class="form-control" id="bentuk" name="bentuk"value= "<?=$con ["bentukid"] ?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Description</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi"value= "<?=$con ["deskripsi"] ?>">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Image</label>
                    <input type="file" class="form-control" id="gambar" name="gambar"value= "<?=$con ["gambar"] ?>">
                </div>

                <button type="submit" name="ubah" class= "btn btn-primary"> Change Data</button>

                </form>
            </div>
        </div>

        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>