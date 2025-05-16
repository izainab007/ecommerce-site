<?php
include 'header.php';
?>

<div class="col-md-9">
	
<div class="container">
	<div class="row">
		<div class="col-md-4">
			
		</div>

		<div class="col-md-4">
			<br>
			<div class="card p-3">
<?php

include 'connection.php';

?>	    <form action="add_color.php" method="POST">
	        
					
	        <input type="text" class="form-control mb-2" name="color" placeholder="add color">
	        <input type="submit" class="btn btn-success" name="addcolor" value="add new color">
       </form>

<?php 

if (isset($_POST['addcolor'])){
	$color = $_POST['color'];

	try{
		$sql = "INSERT INTO tbl_color(color) VALUES ('$color')";
		$conn->exec($sql);
		echo "success";
	}catch(PDOException $e){
		echo "faild";
	}

}

?>

				
		</div>
	</div>

		<div class="col-md-4">
			
		</div>
		
	</div>
	
</div>





</div>
</div>





<?php
include 'footer.php';
?>