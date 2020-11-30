<?php

include("config2.php");

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tag = $_POST['tag'];
    

if(isset($_POST['ubah_foto'])){ 
	$sumber = $_FILES['gambar']['name'];
	$nama_gambar = $_FILES['gambar']['tmp_name'];
	$fotobaru = date('dmYHis').$sumber;
  $path = "upload/".$fotobaru;
  
	if(move_uploaded_file($nama_gambar, $path)){
  $query = "SELECT * FROM tbl_artikel WHERE id=$id";
    $dewan1 = mysqli_query($db1, $query);
		$row = mysqli_fetch_assoc($dewan1);
    if(is_file("upload/".$row['foto']))
        ("upload/".$row['foto']);
    $query = "UPDATE tbl_artikel SET judul='$judul', deskripsi='$deskripsi', tag='$tag', foto='$fotobaru' WHERE id=$id";
    $dewan1 = mysqli_query($db1, $query);
    if( $dewan1 ) {
        header('Location: admin3.php?status=sukses');
      } else {
        header('Location: admin3.php?status=gagal');
      }
	}else{
		header('Location: admin3.php?status=gagal');
	}
}else{
	$query = "UPDATE tbl_artikel SET judul='$judul', deskripsi='$deskripsi', tag='$tag' WHERE id=$id";
    $dewan1 = mysqli_query($db1, $query);

	if($dewan1){
        header('Location: admin3.php?status=sukses');
    } else {
      header('Location: admin3.php?status=gagal');
    }
}
              
?>