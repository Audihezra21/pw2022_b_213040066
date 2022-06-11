<?php

// Array Associative
// Array yang indexnya ber'upa string, yang ber asosisasi dengan nilainya
$mahasiswa = [
    ["nama" =>'Audi Hzr',
    'NPM'=>'213040066', 
    'email'=>'audiahezra21@gmail.com',
    'prodi'=>"Teknik Informatika"], 

    ["nama"=>'Juan Aditya',
     'NPM'=>'213040053',
     'email'=>'JuanAditya@gmail.com',
     'prodi' =>'Teknik Informatika'],

    ["nama"=>'Alif Priamitra', 
    'NPM'=>'213040063',
    'email'=>'Alifpriamitra@gmail.com',
    'prodi'=> 'Teknik Informatika'],
    ["nama"=>'Faisal Ambari',
    'NPM'=>'213040065',
    'email' => 'FaisalAmbari@gmail.com',
    'prodi'=> 'Teknik Informatika'],
    ["nama"=>'Asep Taufan',
    'NPM'=>'2130440056',
    'email'=>'Aseptaufan@gmail.com',
    'prodi'=>'Teknik Informatika']
];


// var_dump($mahasiswa[3]["nama"]);
    
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama  : <?php echo $mhs["nama"]?></li>
    <li>NPM   : <?php echo $mhs["NPM"]?></li>
    <li>Email : <?php echo $mhs["email"]?></li>
    <li>Prodi : <?php echo $mhs["prodi"]?></li>
</ul>
<?php } ?>

