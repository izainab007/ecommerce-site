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

?>	    <form action="add_hard_disk.php" method="POST">
	        
					
	        <input type="text" class="form-control mb-2" name="hard_disk" placeholder="Hard Disk">
	        <input type="submit" class="btn btn-success" name="addharddisk" value="add new hard disk">
       </form>

<?php 

if (isset($_POST['addharddisk'])){
	$hard_disk = $_POST['hard_disk'];

	try{
		$sql = "INSERT INTO tbl_model(hard_disk) VALUES ('$hard_disk')";
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