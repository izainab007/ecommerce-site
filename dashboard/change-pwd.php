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

?>
				<form action="updatepassword.php" method="_POST"> 
					<input type="Password" class="form-control mb-2" name="current_password" placeholder="Old Password">
					<input type="Password" class="form-control mb-2" name="new_password" placeholder="New Password">
					<input type="submit" class="btn btn-success" name="updatepassword" value="Update Password">
	        	</form>


<?php 
if (isset($_POST['updatepassword'])){
	$current_password = $_POST['current_password'];
	$new_password = $_POST['new_password'];
;
	try{
		$sql = "INSERT INTO tbl_change(current_password,new_password,update_password) VALUES ('$current_password','$new_password','$update_password')";
		$conn->exec($sql);
		echo "successfully";
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