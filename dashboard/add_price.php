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

?>	    <form action="add_price.php" method="POST">
	        
					
	        <input type="text" class="form-control mb-2" name="price" placeholder="add price">
	        <input type="submit" class="btn btn-success" name="addmodel" value="add new price">
       </form>

<?php 

if (isset($_POST['addprice'])){
	$price = $_POST['price'];

	try{
		$sql = "INSERT INTO tbl_price(price) VALUES ('$price')";
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