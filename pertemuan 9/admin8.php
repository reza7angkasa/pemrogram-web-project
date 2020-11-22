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
  <link rel="stylesheet" href="style5.css">
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>

</head>

<body>
<div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Bootstrap Sidebar</h3><br>
                <div align="center">
                <a href="admin3.php">
                <img class="img img-responsive rounded-circle mb-3" width="200" height="200" src="upload/<?php echo $_SESSION['admin']['photo'] ?>" />
      </a>
                    
                    <h3 style="color:white"><?php echo  $_SESSION["admin"]["namee"] ?></h3>
                    <p style="color:white"><?php echo $_SESSION["admin"]["email"] ?></p>
                    <hr>
                    <a href="edit7.php?id=<?php echo $_SESSION["admin"]["id"] ?>"><div class="btn btn-lg" style="color:white">Edit Profile</div></a><br>
                    <a href="logout2.php">
                    <div class="btn btn-lg" style="color:white"><i class="fas fa-door-open"></i> Sign Out</div></a>   
                </div>
            </div>

            <ul class="list-unstyled components">
                <p>Dummy Heading</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
		
    
		
		
		
			
		
		
    <div class="container">
        <marquee><h2><b>Write A Quote</b></h2></marquee>
      
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
						<label>Upload A Picture?</label>
						<input type="file" name="gambar" id="gambar" class="form-control" required/>
					</div>
					<div class="form-group">
          <br>
          <div align="center">
          <button type="submit" name="send" class="btn btn-info" /><i class="fas fa-paper-plane fa-lg"></i></button>
					</div>
					
          </div>
				</form>
        </div>
  <br>

<br><br><br>
<br><br>
</body>
</html>

