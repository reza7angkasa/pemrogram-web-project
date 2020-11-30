<?php

include("config.php");


$namee = filter_input(INPUT_POST, 'namee', FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $query = "INSERT INTO admin (namee, username, email, password) 
    VALUES (:namee, :username, :email, :password)";
     $stmt = $db->prepare($query);
    $params = array(
        ":namee" => $namee,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );
    $dewan1 = $stmt->execute($params);
    if( $dewan1 ) {
   
        header('Location: admin.php?status=sukses1');
      } else {
        header('Location: admin.php?status=gagal1');
      }
 



?>
