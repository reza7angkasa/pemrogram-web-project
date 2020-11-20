<?php
require_once("auth1.php");
include("config2.php");

if( !isset($_GET['id']) ){
    header('Location: admin3.php');
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
                        Menu
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
  <marquee><h1><b>Edit Your Account Data</b></h1></marquee>
<br>
    <form action="edit8.php" method="POST"  enctype="multipart/form-data">

        

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

<br><br><br>
</body>
</html>