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

?>	    <form action="add_generation.php" method="POST">
	        
					
	        <input type="text" class="form-control mb-2" name="generation" placeholder="add generation">
	        <input type="submit" class="btn btn-success" name="addgeneration" value="add new generation">
       </form>

<?php 

if (isset($_POST['addgeneration'])){
	$generation = $_POST['generation'];

	try{
		$sql = "INSERT INTO tbl_generation(generation) VALUES ('$generation')";
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