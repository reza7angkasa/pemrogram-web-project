<?php
<<<<<<< HEAD
include_once("koneksi.php");
if($_REQUEST['delete'])
{
	$sql = "DELETE FROM matakuliah WHERE id='".$_REQUEST['delete']."'";
	$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($conn));
	if($resultset) {
	echo "Record Deleted Successfully";
}
}
?>
=======

include("koneksi.php");

if( isset($_GET['id']) ){

    
    $id = $_GET['id'];

  
    $strsql = "DELETE FROM matakuliah WHERE id=$id";
    $runSQL = mysqli_query($conn,$strsql);

    if( $runSQL ){
        header('Location: listmatakuliah.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
>>>>>>> 5a54a7e36f4f8d662b745d0c46f245834b5701c5
