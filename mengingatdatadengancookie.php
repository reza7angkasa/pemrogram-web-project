<?php
$user = 'hitman';
$password = '123';

if (isset($_POST['submit'])){
    if ($_POST['nama']==$user && $_POST['password']==$password){
setcookie('nama_user', $_POST['nama'], time()+120);
header('Location: metodepost2.php');
    }else{
        echo 'login gagal!';
    }
}

?>
<form action="mengingatdatadengancookie.php" method="post">
<input type="text" name="nama">
<input type="password" name="password">
<input type="submit" name="submit">
</form>
