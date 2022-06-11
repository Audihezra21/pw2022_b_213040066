<?php 
// definisikan masing-masing sisi kubus
$a = 9;
$b = 4;

// hitung masing-masing volume kubus
$volume_a = pow($a, 3);
$volume_b = pow($a, 3);

// hitung total 2 volume
$total = $volume_a + $volume_b;

// kembalikan nilai total
echo "Jumlah dari volume kubus dengan sisi $a dan kubus dengan sisi $b adalah $total";

echo "<hr>";

// Deklarasi / definisi function
function total_volume_dua_kubus($a, $b){
    $volume_a = pow($a, 3);
    $volume_b = pow($a, 3);

    $total = $volume_a + $volume_b;


    return "Jumlah dari volume kubus dengan sisi $a dan kubus dengan sisi $b adalah $total";

}

// Pemanggilan / eksekusi function
echo total_volume_dua_kubus(9,4);
echo "<br>";
echo total_volume_dua_kubus(10,20);
echo "<br>";

// buat sebuah fungsi untuk menghitung luas  segi tiga
// echo luasSegiTiga (2,4); //4


$a = 2;
$t = 4;
function luassegitiga ($a, $t){
$luas = ($a * $t)/2 ;


return "Hasil luas segitiga dengan alas $a dan Tinggi  $t adalah $luas";
}

echo luassegitiga(2,4);
echo'<br>';
echo luassegitiga(6,8);

// ataupun bisa juga 
function luassegitigaa ($a1, $t1){

return "Hasil luas segitiga dengan alas $a1 dan Tinggi  $t1 adalah ". ($a1 * $t1)/2;
}

echo luassegitigaa(2,4);
echo'<br>';
echo luassegitigaa(6,8);

// minimalisir penggunaan Variabel

?>