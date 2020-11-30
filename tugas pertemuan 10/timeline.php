<?php
require_once("auth1.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="img/nav1.jpg">
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <script>
  $(document).ready(function(){
    $.ajaxSetup({
	            headers : {
	                'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
	            }
	        });
    var limit = 1;
    var start = 0;
    var action = 'inactive';
    function load_data(limit, start){
      $.ajax({
        url:"get_data.php",
        method:"POST",
        data:{limit:limit, start:start},
        cache:false,
        success:function(data){
          $('#load_data').append(data);
          if(data == ''){
            $('#load_data_message').html("");
            action = 'active';
          } else {
            $('#load_data_message').html("<p align='center'><button class='btn btn-light'><span class='spinner-border spinner-border-md'></span></button></p>");
            action = "inactive";
          }
        }
      });
    }

    if(action == 'inactive'){
      action = 'active';
      load_data(limit, start);
    }

    $(window).scroll(function(){
      if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive'){
        action = 'active';
        start = start + limit;
        setTimeout(function(){
        load_data(limit, start);
        }, 1000);
      }
    });
  });
</script>
<script>
  $(document).ready(function(){
    $.ajaxSetup({
	            headers : {
	                'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
	            }
	        });
    var limit = 1;
    var start = 0;
    var action = 'inactive';
    function load_data1(limit, start){
      $.ajax({
        url:"ambil_data.php",
        method:"POST",
        data:{limit:limit, start:start},
        cache:false,
        success:function(data){
          $('#load_data1').append(data);
          if(data == ''){
            $('#load_data_message1').html("");
            action = 'active';
          } else {
            $('#load_data_message1').html("<p align='center'><button class='btn btn-light'><span class='spinner-border spinner-border-md'></span></button></p>");
            action = "inactive";
          }
        }
      });
    }

    if(action == 'inactive'){
      action = 'active';
      load_data1(limit, start);
    }

    $(window).scroll(function(){
      if($(window).scrollTop() + $(window).height() > $("#load_data1").height() && action == 'inactive'){
        action = 'active';
        start = start + limit;
        setTimeout(function(){
        load_data1(limit, start);
        }, 1000);
      }
    });
  });
</script>
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
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
    
      <h2>About Me</h2>
      
      <h5>Photo Of Me:</h5>
      <div align="center">
       <img class="img img-responsive rounded-circle mb-3" width="200" height="200" src="upload/<?php echo $_SESSION['admin']['photo'] ?>">  
       
        <h3><?php echo  $_SESSION["admin"]["namee"] ?></h3>
        <p><?php echo $_SESSION["admin"]["email"] ?></p>
        <a href="logout2.php"><h5 style="color:black"><i class="fas fa-door-open"></i> Sign Out</h5></a>
        </div>
        <br>
        <h3 align="center">Page</h3>
   
    
    <div class="row" id="load_data1"></div>
    <div id="load_data_message1"></div>
     
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
    <h2 align="center">News</h2>
    <br>
    
    <div class="row" id="load_data"></div>
    <div id="load_data_message"></div>
    
    </div>
  </div>
</div>
<br> <br> <br> <br>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>
