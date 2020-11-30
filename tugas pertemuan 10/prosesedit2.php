<?php

include("config2.php");

    $id = $_POST['id'];
    $title = $_POST['title'];
    $synopsis = $_POST['synopsis'];

if(isset($_POST['ubah_foto'])){ 
	$sumber = $_FILES['gambar']['name'];
	$nama_gambar = $_FILES['gambar']['tmp_name'];
	$fotobaru = date('dmYHis').$sumber;
  $path = "upload/".$fotobaru;
  
	if(move_uploaded_file($nama_gambar, $path)){
  $query = "SELECT * FROM tbl_fileupload WHERE id=$id";
    $dewan1 = mysqli_query($db1, $query);
		$row = mysqli_fetch_assoc($dewan1);
    if(is_file("upload/".$row['avatar']))
        ("upload/".$row['avatar']);
    $query = "UPDATE tbl_fileupload SET title='$title', synopsis='$synopsis', avatar='$fotobaru' WHERE id=$id";
    $dewan1 = mysqli_query($db1, $query);
    if( $dewan1 ) {
        header('Location: admin2.php?status=sukses');
      } else {
        header('Location: admin2.php?status=gagal');
      }
	}else{
		header('Location: admin2.php?status=gagal');
	}
}else{
	$query = "UPDATE tbl_fileupload SET title='$title', synopsis='$synopsis' WHERE id=$id";
    $dewan1 = mysqli_query($db1, $query);

	if($dewan1){
        header('Location: admin2.php?status=sukses');
    } else {
      header('Location: admin2.php?status=gagal');
    }
}
              
?>