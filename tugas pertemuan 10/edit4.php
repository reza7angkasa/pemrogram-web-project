<?php
require_once("auth1.php");
include("config2.php");

if( !isset($_GET['id']) ){
    header('Location: admin7.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM admin WHERE id=$id";
$query = mysqli_query($db1, $sql);
$d = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

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
  
<br>
    <br>
<br>
<br>
<div class="container">
<marquee><h2><b>Edit Data</b></h2></marquee>
<br>
    <br>


    <form action="editA.php" method="POST"  enctype="multipart/form-data">

        

    <input type="hidden" name="id" value="<?php echo $d['id'] ?>" />
            <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="New Username" value="<?php echo $d['username'] ?>" required></div>
            <div class="form-group">
            <label>Password</label><br>
            <input type="checkbox" name="change_password" value="true"> Checklist To Change The Password<br>
            <input type="password" name="password"  class="form-control" placeholder="New Password" value="<?php echo $d['password'] ?>">
            
								
                </div>
            <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $d['email'] ?>" required></div>
            <div class="form-group">
            <label>Name</label>
            <input type="text" name="namee" class="form-control" placeholder="Your Name" value="<?php echo $d['namee'] ?>" required>
        </div>
        <div class="form-group">
        <label>Picture</label><br>
								<img src="upload/<?php echo $d['photo'] ?>"
                width="150px" height="120px" /></br>
								<input type="checkbox" name="ubah_foto" value="true"> Checklist To Change The Picture<br>
								<input name="gambar" type="file" class="form-control">
        </div>
     
        <br><div align="center">
          <button type="submit" class="btn btn-info" /><i class="fas fa-paper-plane fa-lg"></i></button>
					</div>
    </input>
  
   

   
    </form>
    </diV>
    <br>
    <br>
<br>
<br>
    <div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>
    </body>
</html>