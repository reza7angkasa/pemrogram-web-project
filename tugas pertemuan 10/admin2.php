<?php 
require_once("auth1.php");
      include_once "config2.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/nav1.jpg">
	<title>Angkasa Enterprises</title>
     <!-- CSS only -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
   
    <script>
    $(document).ready(function() {
        $('#listtable').DataTable();
    } );
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
<br><br> <br><br>
  <div class="container">
  <?php if(isset($_GET['status'])): ?>
        <div align="center">
    <div class="alert alert-warning" style="width: 490px;">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "The Story Has Been Altered Successfully";
            } else if ($_GET['status'] == 'gagal') {
                echo "Sorry There Is An Error The Story Can't Be Altered";
              }else if ($_GET['status'] == 'sukses1') {
                echo "Your Story Has Been Published Successfully";
              }else if ($_GET['status'] == 'gagal1') {
                echo "Sorry There Is An Error Your Story Can't Be Posted";
              } else if ($_GET['status'] == 'success') {
                echo "The Story Has Been Deleted Successfully";
            } else{
              echo "Sorry There Is An Error The Story Can't Be Deleted";
            }
        ?>
    </div>
    </div>
    <?php endif; ?> 
      <div class="row">
      
        <div class="col-md-12">
      
        <a href="admin7.php" class="btn btn-primary"><i class="fas fa-plus"></i> Create</a>
        <br><br>
        <table id="listtable" class="table table-striped">
        <thead>
      <tr>
      
              <th>Id</th>
              <th>Title</th>
              <th>Synopsis</th>
              <th>Picture</th>
              <th>Writer</th>
              <th>Post Date</th>
              <th>Action</th>
              
      </tr>
    </thead>
    <tbody>
    <?php
        $no=1;
        $query = "SELECT * FROM tbl_fileupload ORDER BY id DESC";
        $dewan1 = $db1->prepare($query);
        $dewan1->execute();
        $res1 = $dewan1->get_result();
        while ($row = $res1->fetch_assoc()){
            ?>
        <tr>
        <td>
            <?php echo $row['id']; ?>
            </td>
        <td>
            <?php echo $row['title']; ?>
            </td>
            <td>
                            <?php echo $row['synopsis']; ?>
                            </td>
                            <td>
                            <img src="upload/<?php echo $row['avatar']; ?>" width="330px" height="350px">
                        </td>
                        <td>
                            <?php echo $row['identity']; ?>
                            </td>
                            <td>
                            <?php echo $row['date']; ?>
                            </td>
              <td>
                <a href="edit2.php?id=<?php echo $row["id"] ?>" class="btn btn-info"> <i class="fa fa-edit"></i></a>
                
                <a href="delete2.php?id=<?php echo $row["id"] ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
              </td>
            </tr>
    <?php 
      }
    ?>
    </tbody>
        </table>
        </div>
      </div>
    </div>
    <br><br> <br><br>
    </div>
    <div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>
</body>
</html>