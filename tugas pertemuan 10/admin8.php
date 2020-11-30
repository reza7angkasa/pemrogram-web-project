<?php
require_once("auth1.php");
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
  <link rel="icon" href="img/nav1.jpg">
	<title>Angkasa Enterprises</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
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
		
    
		
		
		
			
		
<br> <br> <br> <br>
    <div class="container">
        <marquee><h2><b>What's On Your Mind?</b></h2></marquee>
      
        <br><br>
<div class="container mb-3">

<form action="article.php" method="POST" enctype="multipart/form-data">

					<div class="form-group">
          <label>Title</label>
          <input type="text" name="judul" id="judul" class="form-control" placeholder="Title (Optional)"/>
					</div>
					<div class="form-group">
          <label>Description</label>
						<textarea class="form-control" id="deskripsi" name="deskripsi"  rows="10" placeholder="Quote" required></textarea>
					</div>
                    <div class="form-group">
                    <label>Tag</label>
						<input type="text" class="form-control" id="tag" name="tag" placeholder="You Can Tag Or Give A Source By Share A Link Here (Optional)"/>
					</div>
                    <div class="form-group">
						<label>Upload A Picture</label>
						<input type="file" name="gambar" id="gambar" class="form-control" required/>
					</div>
					
          <br>
          <div align="center">
          <button type="submit" name="send" class="btn btn-info" /><i class="fas fa-paper-plane fa-lg"></i></button>
					</div>
					
          </div>
				</form>
        </div>
        <br> <br> <br> <br>
        <div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>
</body>
</html>

