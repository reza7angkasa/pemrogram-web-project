<?php
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