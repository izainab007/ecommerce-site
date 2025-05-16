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

?>	    <form action="add_model.php" method="POST">
	        
					
	        <input type="text" class="form-control mb-2" name="model" placeholder="add model">
	        <input type="submit" class="btn btn-success" name="addmodel" value="add new model">
       </form>

<?php 

if (isset($_POST['addmodel'])){
	$model = $_POST['model'];

	try{
		$sql = "INSERT INTO tbl_model(model) VALUES ('$model')";
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