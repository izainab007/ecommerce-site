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

?>	    <form action="add_ram.php" method="POST">
	        
					
	        <input type="text" class="form-control mb-2" name="ram" placeholder="add ram">
	        <input type="submit" class="btn btn-succes" name="addram" value="add new ram">
       </form>

<?php 

if (isset($_POST['addram'])){
	$ram = $_POST['ram'];

	try{
		$sql = "INSERT INTO tbl_ram(ram) VALUES ('$ram')";
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