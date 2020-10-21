<?php
include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['kodemk'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $kodemk = $_POST['kodemk'];
    $namamk = $_POST['namamk'];
    $kategori = $_POST['kategori'];
    $sks = $_POST['sks'];

    // buat query update
    $strsql = "UPDATE matakuliah SET kodemk='$kodemk', namamk='$namamk', kategori='$kategori', sks='$sks' WHERE id=$id";
    $runSQL = mysqli_query($conn, $strsql);

    // apakah query update berhasil?
    if( $runSQL ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: listmatakuliah.php?status=sukses');
    } else {
        // kalau gagal tampilkan pesan
        die("Location: listmatakuliah.php?status=gagal");
    }


} else {
    die("Akses dilarang...");
}

?>