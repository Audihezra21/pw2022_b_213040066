<?php 
require 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MetaSite.ID</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- STYLE CSS -->
    <style>
        .header {
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7)), url(img/metaverse.jpg);
    background-position: center;
    background-size:cover;
    position:relative;
}
@media(max-width: 700px) {
    .text-box h1 {
        font-size: 20px;
    }
}
.text-box {
    width: 90%;
    color: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.text-box p {
    margin: 10px 0 40px;
    font-size: 18px;
    color: #fff;
}

.text-box a {
    color: white;
}



        </style>
</head>
<body>
    <!-- Jumbotron -->
<div class="header">
    <a href=""><img src=""></a>
<nav class="navbar navbar-expand-lg navbar-light  shadow-sm fixed-top">
        <div class="container">
        <a class="navbar-brand text-white" href="#">Welcome User </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="login.php">My Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="logout.php">Logout</a>         
              </li>     
            </ul>
          </div>
        </div>        
      </nav> 
      <div class="text-box">
        <h2>Metaverse.ID</h2>
        <p>Future Machine Technology</p>
        <button class="btn fs-5" type="button" > <a href="metaverseuser.php"> What is Metaverse ? </a></button>
        <button class="btn fs-5" type="button" > <a href="knowmetaverseuser.php"> System Payment in Metaverse </a></button>
        <button class="btn fs-5" type="button" > <a href="deskripsiuser.php"> Description of System in Metaverse</a></button>
    </div>
</div>
       <!-- Akhir Jumbotron -->

</body>
</html>