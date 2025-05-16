<!DOCTYPE html>
<html>
<head>
	<title>submit</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=review", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>


<form action="review.php" method="POST">
	<input type="text" name="username" placeholder="">
	<input type="text" name="email" placeholder="">
	<input type="text" name="password" placeholder="">
	<input type="submit" name="SUBMIT REVIEW" value="SUBMIT REVIEW">
</form>



<?php 
if (isset($_POST['SUBMIT REVIEW'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	try{
		$sql = "INSERT INTO tbl_star(nickname,summary,review) VALUES ('$nickname','$summary','$review')";
		$conn->exec($sql);
		echo "successfully";
	}catch(PDOException $e){
		echo "faild";
	}

}

?>

</body>
</html>