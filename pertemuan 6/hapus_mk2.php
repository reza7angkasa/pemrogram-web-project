<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $strsql = "DELETE FROM matakuliah WHERE id=$id";
    $runSQL = mysqli_query($conn,$strsql);

    // apakah query hapus berhasil?
    if( $runSQL ){
        header('Location: listmatakuliah.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>