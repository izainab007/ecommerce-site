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

?>	    <form action="add_processor.php" method="POST">
	        
					
	        <input type="text" class="form-control mb-2" name="processor" placeholder="add processor">
	        <input type="submit" class="btn btn-success" name="addprocessor" value="add new processor">
       </form>

<?php 

if (isset($_POST['addprocessor'])){
	$processor = $_POST['processor'];

	try{
		$sql = "INSERT INTO tbl_processor(processor) VALUES ('$processor')";
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