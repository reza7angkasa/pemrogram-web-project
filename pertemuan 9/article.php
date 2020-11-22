<?php

session_start();
include("config2.php");
include 'csrf.php';
$displaypict = $_SESSION['admin']['photo'];
$penulis = $_SESSION['admin']['namee'];
    $judul   = $_POST['judul'];
  $deskripsi          = $_POST['deskripsi'];
  $tag = $_POST['tag'];
  
  $sumber = $_FILES['gambar']['tmp_name'];
	$target = 'upload/';
	$nama_gambar = $_FILES['gambar']['name'];
$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
    $query = "INSERT INTO tbl_artikel (judul, deskripsi, tag, foto, displaypict, penulis) VALUES ('$judul', '$deskripsi', '$tag','$nama_gambar', '$displaypict', '$penulis')";
    $dewan1 = mysqli_query($db1,$query);
    if( $dewan1 ) {
      echo json_encode(['success' => 'Sukses']);
        header('Location: admin3.php?status=success1');
      } else {
        header('Location: admin3.php?status=failed1');
      }
 



?>