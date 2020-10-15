<?php
session_start();
if(isset($_SESSION['nama_user'])){
    echo 'ini halaman profil ' . $_SESSION['nama_user'];
}else{
    echo 'login dulu gan';
}
?>
<br>
<a href="logout1.php">Logout</a>
