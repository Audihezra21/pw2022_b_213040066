<?php
// Superglobals 
// Variabel bawaan PHP yang bisa diakses di mana pun
// Bentuknya Array Associative
// $_GET
// $_POST
// $_SERVER
// $_GET = ['NAMA'] => ['AUDI','EMAIL' => "audiahezra21@gmail.com'];
// $_GET["nama"] = 'Audi';
// $_GET["EMAIL"] = "Audiahezra21@gmail.com";


// var_dump($_GET);
?>

<!-- <h1>Halo, <?= $_GET["nama"]; ?> </h1> -->

<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=Audi&npm=213040066&email=audiahezra21@gmail.com">Audi</a>

    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=ahuy&npm=213040444&email=ahuy@gmail.com">ahuy</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=hiuastro&npm=213040666&email=hiuastro@gmail.com">hiuastro</a>
    </li>
</ul>