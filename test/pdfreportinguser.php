<?php
require 'functions.php';

$content = query("SELECT * FROM content");

// Jika tombol cari diklik 
if(isset($_GET["cari"])) {
  $keyword = $_GET ["keyword"];
  $query = "SELECT * FROM content WHERE 
          nama LIKE '%$keyword%' OR 
          npm LIKE '%$keyword%'
          ";
          $content = query($query);
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

    <title>Description Of System In Metaverse</title>
    <style>
      body {
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7)), url(img/bghome.jpg);
    background-position: center;
    background-size:cover;
    position:relative;
    
    }
    .container h1 {
      color: white;
      margin-top: 50px;
    }


    .table {
      color: white;
      width: 80%;
      text-align: center;
      margin-left: 100px;
      
    }
    th {
      margin-top: 100px;
      
    }

    td {
      border: black solid 1px;
      padding: 0 50px;
      margin-top: 50px;
    }
    .a {
      border: black solid 1px;
      margin-left: 800px;
    }



      </style>
  </head>
  <body>
    
    <div class="container">
      
    </button>
      <h1>Description Part On Metaverse</h1>
      <a href="deskripsiuser.php" class="btn btn-primary">Back To Home</a>
      <button class="hidden btn btn-danger " onclick="window.print()">
      <i class="bi bi-journal-plus">Cetak PDF</i>
      </button>
       




        <table class="table fs-8">
        <thead>
            <tr class="fs-5">
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Function</th>
            <th scope="col">Format</th>
            <th scope="col">Description</th>

            </tr>
        </thead>
        <tbody>

        <?php $no = 1; foreach($content as $con)  { ?>
            <tr class="align-middle">
            <th scope="row"><?= $no++;?></th>
            <td>
            <img src= img/<?=$con["gambar"]; ?> width="150px" class="img-thumbnail fs-5">
            </td>
            <td><?php echo $con["nama"]?></td>
            <td><?php echo $con["fungsi"] ?></td>
            <td><?php echo $con["bentukid"]?></td>
            <td><?php echo $con["deskripsi"]?></td>

            </tr> 
        <?php } ?>
            <tr class="align-middle">
           
            </tr>
        </tbody>
        </table>
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

