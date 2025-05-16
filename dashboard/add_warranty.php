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

?>	    <form action="add_warranty.php" method="POST">
	        
					
	        <input type="text" class="form-control mb-2" name="warranty" placeholder="add warranty">
	        <input type="submit" class="btn btn-success" name="addwarranty" value="add new warranty">
       </form>

<?php 

if (isset($_POST['addwarranty'])){
	$warranty = $_POST['warranty'];

	try{
		$sql = "INSERT INTO tbl_warranty(warranty) VALUES ('$warranty')";
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