<?php

include("config2.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];
    $sql = "DELETE FROM admin WHERE id=$id";
    $query = mysqli_query($db1, $sql);

    if( $query ){
        header('Location: admin.php?status=success');
    } else {
        header('Location: admin.php?status=failed');
    }

} else {
    die("akses dilarang...");
}

?>