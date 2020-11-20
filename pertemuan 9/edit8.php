<?php

include("config2.php");

    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $namee = $_POST['namee'];

    if (isset($_POST['change_password']) AND isset($_POST['ubah_foto'])) {
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $sumber = $_FILES['gambar']['name'];
    $nama_gambar = $_FILES['gambar']['tmp_name'];
    $fotobaru = date('dmYHis').$sumber;
    $path = "upload/".$fotobaru;
    
    if(move_uploaded_file($nama_gambar, $path)){
    $sql = "SELECT * FROM admin WHERE id=$id";
      $query = mysqli_query($db1, $sql);
      $admin = mysqli_fetch_assoc($query);
      if(is_file("upload/".$admin['photo']))
          ("upload/".$admin['photo']);
      $sql = "UPDATE admin SET username='$username', email='$email', namee='$namee',password='$password', photo='$fotobaru' WHERE id=$id";
      $query = mysqli_query($db1, $sql);
      if( $query ) {
          header('Location: admin3.php?status=done');
        } else {
          header('Location: admin3.php?status=undone');
        }
    }else{
      header('Location: admin3.php?status=undone');
    }
  } else if(isset($_POST['ubah_foto'])){ 
	$sumber = $_FILES['gambar']['name'];
	$nama_gambar = $_FILES['gambar']['tmp_name'];
	$fotobaru = date('dmYHis').$sumber;
  $path = "upload/".$fotobaru;
  
	if(move_uploaded_file($nama_gambar, $path)){
  $sql = "SELECT * FROM admin WHERE id=$id";
    $query = mysqli_query($db1, $sql);
		$admin = mysqli_fetch_assoc($query);
    if(is_file("upload/".$admin['photo']))
        ("upload/".$admin['photo']);
    $sql = "UPDATE admin SET username='$username', email='$email', namee='$namee', photo='$fotobaru' WHERE id=$id";
    $query = mysqli_query($db1, $sql);
    if( $query ) {
        header('Location: admin3.php?status=done');
      } else {
        header('Location: admin3.php?status=undone');
      }
    }
	}else if (isset($_POST['change_password'])){ 
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
      $sql = "UPDATE admin SET username='$username', email='$email', namee='$namee', password='$password' WHERE id=$id";
      $query = mysqli_query($db1, $sql);
      if( $query ) {
          header('Location: admin3.php?status=done');
        } else {
          header('Location: admin3.php?status=undone');
        }
}else{
	$sql = "UPDATE admin SET username='$username', email='$email', namee='$namee' WHERE id=$id";
    $query = mysqli_query($db1, $sql);

	if($query){
        header('Location: admin3.php?status=done');
    } else {
      header('Location: admin3.php?status=undone');
    }
}
              
?>