<?php
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "anto" && $password == "123") {
        $_SESSION["sessionUsername"] = $username;
        header("Location: dashboard.php");
    }
    else {
        echo "Username / Password ada yg salah";
    }
}
else {
 header("Location: login.php");
}


?>