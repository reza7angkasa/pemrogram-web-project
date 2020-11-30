<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $namee = filter_input(INPUT_POST, 'namee', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO admin (namee, username, email, password) 
            VALUES (:namee, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":namee" => $namee,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

  
    $saved = $stmt->execute($params);

   
    if($saved) header("Location: adminpage2.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/nav1.jpg">
	<title>Angkasa Enterprises</title>
    <body background="img/1.jpg" height="100" width="100">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
	
    


<div class="container mt-5">

<br>
<br>
    <div class="row">
    
        <div class="col-md-6">
<div class="jumbotron bg-light">
        <h4>Make your own Angkasa Enterprises account by sign up your data here!!!</h4>
        <p>Already have an account? <a href="adminpage2.php">Sign in here</a></p>
        
        <form action="" method="POST">

            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="namee" placeholder="Your Name" required oninvalid="this.setCustomValidity('Please fill out this field')"
          oninput="this.setCustomValidity('')" />
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" required oninvalid="this.setCustomValidity('Please fill out this field')"
          oninput="this.setCustomValidity('')" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Your E-mail" required oninvalid="this.setCustomValidity('Please fill out this field')"
          oninput="this.setCustomValidity('')" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" required oninvalid="this.setCustomValidity('Please fill out this field')"
          oninput="this.setCustomValidity('')" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="register" value="Sign Up" />
            </div>
        </form>
            
        </div>

        <div class="col-md-6">
        <div align="center">
        <img class="img img-responsive" src="img/nav1.jpg" width="330"
          height="350"/> <br>
        <br> 
        </div>
        </div>

</body>
</html>