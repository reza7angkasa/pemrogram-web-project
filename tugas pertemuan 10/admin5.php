<?php 
require_once("auth1.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/nav1.jpg">
	<title>Angkasa Enterprises</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>My First Bootstrap 4 Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="timeline.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Master User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin3.php">Master Berita</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="admin2.php">Master Halaman</a>
      </li>   
    </ul>
  </div>  
</nav>
  
<br>  <br>  <br>  <br>  
<div class="container">
<marquee><h2><b>Add Data</b></h2></marquee>
  <br>
    <br>

    <form action="add.php" method="POST"  enctype="multipart/form-data">

        

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
     
        <br><div align="center">
          <button type="submit" class="btn btn-info" /><i class="fas fa-paper-plane fa-lg"></i></button>
					</div>
    </input>
  
   

   
    </form>
    </diV>
    <br>  <br>  <br>  <br>  
    <div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>
    </body>
</html>