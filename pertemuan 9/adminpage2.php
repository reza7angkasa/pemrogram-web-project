<?php 

require_once("config.php");
if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM admin WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if($admin){
 
        if(password_verify($password, $admin["password"])){
          
            session_start();
            $_SESSION["admin"] = $admin;
          
            header("Location: admin3.php");
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/nav1.jpg">
	<title>Angkasa Enterprises</title>
    <body background="img/1.jpg" height="100" width="100">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	


<div class="container mt-5">
<br>
<br>

    <div class="row">
        <div class="col-md-6">
        <div class="jumbotron bg-light">
        <br> <br>
        <h4>Sign In</h4>
        <p>Don't have an account? <a href="adminpage3.php">Sign up here</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username or E-mail" />
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>
            
            <input type="submit" class="btn btn-success btn-block" name="login" value="Sign In" /><hr>
          
            
         
            </div>
        </form>
            
        </div>

        <div class="col-md-6">
        <div align="center">
        <img class="img img-responsive" src="img/nav1.jpg" width="330"
          height="350"/> <br>
        <br>  <br>  
        </div>
        </div>
</body>
</html>