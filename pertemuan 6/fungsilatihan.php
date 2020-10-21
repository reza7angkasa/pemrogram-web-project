<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $namad = $_POST['namad'];
    $namab = $_POST['namab'];
    $email = $_POST['email'];

    // buat query
    $sql = "INSERT INTO biodata (namad, namab, email) VALUE ('$namad', '$namab', '$email')";
    $query = mysqli_query($db, $sql);
    if( $query ) {
      
        header('Location: latihan.php?status=sukses');
    } else {
        
        header('Location: latihan.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>