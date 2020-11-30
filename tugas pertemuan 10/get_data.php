<?php
include 'config2.php';

if(isset($_POST["limit"], $_POST["start"])){
	$start = $_POST["start"];
	$limit = $_POST["limit"];
	$query = "SELECT * FROM tbl_fileupload ORDER BY id ASC LIMIT ?, ?";
	$dewan1 = $db1->prepare($query);
	$dewan1->bind_param("ss", $start, $limit);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		$id = $row["id"];
		$avatar = $row["avatar"];
		$date = $row["date"];
		$title = $row["title"];
        $synopsis = $row["synopsis"];
        $displaypict = $row["displaypict"];
        $identity = $row["identity"];
		echo '<div class="card mb-3">
        
        <div class="card-body">
        <h4 align="center" class="card-title">'.$title.'</h4>
        <br>
        
        
         
         

          <h5 align="justify" class="card-text">'.$synopsis.'</h5><br>
         
          
          <div class="container">
          
         <img src="upload/'.$row["avatar"].'" class="card-img-top" alt="image">
         </div>
        </div>
        
        
       
        <hr>
        <div class=container>
        <div align="right">
        <img src="upload/'.$row["displaypict"].'" class="mr-3 mt-3 rounded-circle" style="width:60px; height:55px;">
        <p align="right" class="card-text">Author '.$identity.'</p>
        </div>
         </div>
         <br>
         <p align="right" class="card-text"><small class="text-muted">Posted On '.$date.'</small></p>
         </div>
         <br>
        
      </div>';
	}
}
?>
