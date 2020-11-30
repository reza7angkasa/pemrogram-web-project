<?php
include 'config2.php';

if(isset($_POST["limit"], $_POST["start"])){
	$start = $_POST["start"];
	$limit = $_POST["limit"];
	$query = "SELECT * FROM tbl_artikel ORDER BY id ASC LIMIT ?, ?";
	$dewan1 = $db1->prepare($query);
	$dewan1->bind_param("ss", $start, $limit);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		$id = $row["id"];
		$foto = $row["foto"];
		
		$tag = $row["tag"];
		$displaypict = $row["displaypict"];
		$penulis = $row["penulis"];
		$tgl_input = $row["tgl_input"];
		$judul = $row["judul"];
		
		$deskripsi = $row["deskripsi"];
		
          
		echo '
		<div class="card-deck">
		<div class="card mb-3" style="max-width: 570px;">
		<div class="row no-gutters">
		  <div class="col-md-4">
			<img src="upload/'.$row["foto"].'" class="card-img" alt="image">
		  </div>
		  <div class="col-md-8">
			<div class="card-body">
			  <h4 class="card-title">'.$judul.'</h4>
			  <h5 class="card-text">'.$deskripsi.'</h5>
			  
			  <img align="right" src="upload/'.$row["displaypict"].'" class="mr-3 mt-3 rounded-circle" style="width:60px; height:55px;">
			
			  <p class="card-text"><small class="text-muted">Author '.$penulis.'</small></p>
			  <p class="card-text"><small class="text-muted">Posted On '.$tgl_input.'</small></p>
			</div>
		  </div>
		</div>
		</div>
	 ';
	  
		  
	}
}
?>