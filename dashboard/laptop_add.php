<!DOCTYPE html>
<html>
<head>
	<title>laptop_add</title>
</head>
<body>


<form action="index.php" method="POST">
		<input type="text" class="form-control mb-2" name="" placeholder="Brand">
        <input type="text" class="form-control mb-2" name="" placeholder="Model">
		<input type="text" class="form-control mb-2" name="" placeholder="Processor">
		<input type="text" class="form-control mb-2" name="" placeholder="Generation">
		<input type="text" class="form-control mb-2" name="" placeholder="Ram">
		<input type="text" class="form-control mb-2" name="" placeholder="Hard Disk">
		<input type="text" class="form-control mb-2" name="" placeholder="Price">
		<input type="text" class="form-control mb-2" name="" placeholder="Warranty">
		<input type="text" class="form-control mb-2" name="" placeholder="Color">
		<input type="submit" class="btn btn-success" name="" value="add new laptop">

</form>


<?php 
include 'connection.php';
if (isset($_POST['ok'])){
	$brand = $_POST['brand'];
	$model = $_POST['model'];
	$processor = $_POST['processor'];
	$generation = $_POST['generation'];
	$ram = $_POST['ram'];
	$hard_disk = $_POST['hard_disk'];
	$price = $_POST['price'];
	$warranty = $_POST['warraty'];
	$color = $_POST['color'];
	try{
		$sql = "INSERT INTO tbl_add_laptop(brand,model,processor,generation,ram,hard_disk,price,warranty,color) VALUES ('$brand','$model','$processor','$generation','$ram','$hard_disk','$price','$warranty','$color')";
		$conn->exec($sql);
		echo "successfully";
	}catch(PDOException $e){
		echo "faild";
	}

}

?>



</body>
</html>