<?php 
require 'functions.php';
$id = $_GET["id"];

if(hapus($id) > 0) {
    echo "<script>
        alert('Data Successfully Deleted!');
        document.location.href = 'deskripsiadmin.php';
    </script>";
}
