<!DOCTYPE html>
<html>
<head>
	<title>chnage_password</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=password", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

    <form action="changepassword.php" method="_POST">
			<input type="Password" class="form-control mb-2" name="current_password" placeholder="Old Password">
			<input type="Password" class="form-control mb-2" name="new_password" placeholder="New Password">
			<input type="submit" class="btn btn-success" name="changepassword" value="Update Password">
    </form>




?>

<?php 
if (isset($_POST['updatepassword'])){
	$current_password = $_POST['current_password'];
	$new_password = $_POST['new_password'];

	try{
		$sql = "INSERT INTO tbl_change(current_password,new_password,update_password) VALUES ('$current_password','$new_password','$update_password')";
		$conn->exec($sql);
		echo "successfully";
	}catch(PDOException $e){
		echo "faild";
	}

}

?>




</body>
</html>