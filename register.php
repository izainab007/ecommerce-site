<?php 
include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-4">

		</div>
		<div class="col-md-4">
			<div class="card p-3">
			  <div class="card-header">
			    Register New Data
			  </div>
			  <br>
			  <form action="register.php" method="POST">
				<input type="text" class="mb-2 form-control" name="username" placeholder="username">
				<input type="text" class="mb-2 form-control" name="email" placeholder="email">
				<input type="text" class="mb-2 form-control" name="password" placeholder="password">
				<input type="text" class="mb-2 form-control" name="repeat_password" placeholder="Repeat Password">
				<input type="submit" class="btn btn-success" name="reg_data" value="register new data">
			</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=laptop", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>


<?php 
if (isset($_POST['reg_data'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repeat_password = $_POST['repeat_password'];
	try{
		$sql = "INSERT INTO tbl_register(username,email,password,repeat_password) VALUES ('$username','$email','$password','$repeat_password')";
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


<?php 
include 'footer.php';
?>