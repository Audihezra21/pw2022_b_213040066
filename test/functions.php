<?php

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('Connection Failed');

    return $conn;
}

function query( $query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));



$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

    return $rows;
}

// Tambah
function tambah($data) {
    $conn = koneksi();


    // Cek Apakah user tidak mengupload gambar
    if($_FILES["gambar"]["error"]=== 4 ){
        // pilih gambar default
        $gambar = 'random.png';
    }else{
        // jalankan fungsi upload
        $gambar = upload();
        // Cek jika upload gagal
        if(!$gambar){
            return false;
        }
    }


    $nama = htmlspecialchars($data["nama"]);
    $fungsi= htmlspecialchars($data["fungsi"]);
    $bentuk = htmlspecialchars($data["bentuk"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    // $gambar= htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO content VALUES (null, '$nama', '$fungsi', '$bentuk', '$deskripsi', '$gambar')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

   return mysqli_affected_rows($conn);
}
// Hapus
function hapus($id) {
    $conn = koneksi();

    // Query mahasiswa berdasarkan id
    $con = query("SELECT *FROM content WHERE id = $id")[0];

    // cek jika gambar default
    if($con["gambar"] !== 'random.png'){
        // hapus gambar
        unlink ('img/' . $con["gambar"]);
        
        
    }
    
    


    mysqli_query($conn, "DELETE FROM content WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}

// Ubah
function ubah ($data) {    
$conn = koneksi();
$id = $data ["id"];
$nama = htmlspecialchars($data["nama"]);
$fungsi= htmlspecialchars($data["fungsi"]);
$bentuk = htmlspecialchars($data["bentuk"]);
$deskripsi = htmlspecialchars($data["deskripsi"]);
$gambar= htmlspecialchars($data["gambar"]);
    $query = "UPDATE content SET 
        nama = '$nama',
        fungsi = '$fungsi',
        bentukid = '$bentuk',
        deskripsi = '$deskripsi',
        gambar = '$gambar'
        WHERE id = $id
    ";

    
mysqli_query($conn, $query) or die(mysqli_error($conn));
    
return mysqli_affected_rows($conn);
}
// UPLOAD Gambar
function upload(){

    // Siapkan data gambar
    $filename = $_FILES["gambar"]["name"];
    $filetmpname = $_FILES["gambar"]["tmp_name"];
    $filesize = $_FILES ["gambar"]["size"];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ["jpg", "jpeg" , "png"];

    // Cek apakah yang di upload bukan gambar
    if(!in_array(strtolower($filetype),$allowedtype)){
        echo "<script>
        alert('Your Image is Error, Please Change Your Image');
        </script>";
        return false;
    }
    
// Cek Gambar terlalu besar
if($filesize > 5000000){

        echo "<script>
        alert(' File Size to Big, Please Change to another one!');
        </script>";
        return false;
}

// Proses upload gambar
$newfilename = uniqid() . $filename;
move_uploaded_file($filetmpname,'img/' . $newfilename);

return $newfilename;

}

// TAMBAHIN FUNCTION CARI!!!
function cari($keyword) {
    $query = "SELECT * FROM content 
                WHERE
                nama LIKE '%$keyword%' OR
                fungsi LIKE '%$keyword%' OR
                bentukid LIKE '%$keyword%' OR
                deskripsi LIKE '%$keyword%' OR
                gambar LIKE '%$keyword%'
                ";
        return query($query);
}


// register akun
function register($data) {
    $conn = koneksi();

    $nama = strtolower(stripslashes($data["nama"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek email
    $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Your Email Already Registered, Please Try Another Email');
                document.location.href = 'register.php';
                </script>";
        return false;
    }

    //cek konfrimasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('Sorry your Password not correct!');
                document.location.href = 'register.php';
                </script>";

        return false;
    }
//enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

//tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('','$nama', '$email', '$password', 'user')");

    return mysqli_affected_rows($conn);
}

