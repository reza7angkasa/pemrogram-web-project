<?php

include("config2.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];
    $query = "DELETE FROM tbl_fileupload WHERE id=$id";
    $dewan1 = mysqli_query($db1, $query);

    if( $dewan1 ){
        header('Location: admin2.php?status=success');
    } else {
        header('Location: admin2.php?status=failed');
    }

} else {
    die("akses dilarang...");
}

?>