<?php 
// Pertemuan 4
// Function (string $format, ?int $timestamp)
// built-in function 

// date()  
// untuk mengetahui waktu saat ini  
// defaulttimezone : UTC (-7 jam) 
// echo date ('d'); ada angka 0
// echo date ('j); tidak ada angka 0
// echo date('l'); menggunakan  L kecil untuk menyatakan hari
// L kecil = hari , j = tanggal F = Bulan Y = Tahun G = Jam (UTC)
echo date ('l,j F Y');
echo '<hr>';

echo date('l',time());
echo'<hr>';
// time
//UNIX Timestamp/EPOCH Time
// Detik yang sudah berlalu sejak 1 Januari 1970
echo time(); 
echo '<hr>';
echo time () + 60*60*24;
echo '<hr>';
// mengecek 100 hari kedepan
echo date ('l', time () + 60 * 60* 24*100);
// mengecek 100 hari kebelakang
echo date ('l', time () - 60 * 60* 24*100);

echo '<hr>';

// mktime()
// membuat waktu berdasarkan format
// mktime (0,0,0,0,0,0);
// jam, menit,detik,bulan,tanggal,tahun
echo mktime (10,45,0,3,5,2022);
echo'<hr>';
// hari lahirku
echo  date ("l", mktime(0,0,0,8,30,2000));
echo '<hr>';
echo strtotime('30 August 2000');
echo  '<br>';
echo mktime(0,0,0,8,30,2000);
echo '<hr>';
// fungsi matematika 
// pow() untuk pangkat
// (x,y) x = angka yang akan di pangkatkan , y = pangkat berapa
echo pow(5,3);
echo '<br>';
// rand () ,  RNG random number generator
// (x,y) x= angka terkecil y = batas paling tinggi rng
echo rand(1,10);
echo '<br>';
// pembulatan ke nilai terdekat
echo round (2.4);
echo "<br>";
// ke atas
echo ceil (2.1);
echo "<br>";
// kebalikan dari ceilling yaitu ke bawah
echo floor(2.9);







?>