<?php

session_start();
include("config2.php");
include 'csrf.php';


    $title   = $_POST['title'];
  $synopsis          = $_POST['synopsis'];
  $displaypict = $_SESSION['admin']['photo'];
  $identity          = $_SESSION['admin']['namee'];
  $sumber = $_FILES['gambar']['tmp_name'];
	$target = 'upload/';
	$nama_gambar = $_FILES['gambar']['name'];
$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
if($pindah){
    $query = "INSERT INTO tbl_fileupload (title, synopsis, displaypict, identity, avatar) VALUES ('$title', '$synopsis', '$displaypict', '$identity', '$nama_gambar')";
    $dewan1 = mysqli_query($db1,$query);
    if( $dewan1 ) {
      echo json_encode(['success' => 'Sukses']);
        header('Location: admin2.php?status=sukses1');
      } else {
        header('Location: admin2.php?status=gagal1');
      }
    }else{
        echo "<b>Gagal Upload File</b>";
    }
 



?>
