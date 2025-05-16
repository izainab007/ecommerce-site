<!DOCTYPE html>
<html>
<head>
	<title>laptop_add</title>
</head>
<body>
	
<?php
			include 'connection.php';
			if (isset($_GET['abc'])){
				$abc = $_GET['abc'];
				$sql="SELECT * from tbl_add_laptop WHERE id='$abc'";
				$q = $conn->query($sql);
				while($row = $q->fetch(PDO::FETCH_ASSOC)){
				?>


<form action="update.php" method="POST">
		<input type="hidden" class="form-control mb-2" name="id" value="<?php echo $row['id']?>" placeholder="Brand">
		<input type="text" class="form-control mb-2" name="brand" value="<?php echo $row['brand']?>" placeholder="Brand">
        <input type="text" class="form-control mb-2" name="model" value="<?php echo $row['model']?>" placeholder="Model">
		<input type="text" class="form-control mb-2" name="processor" value="<?php echo $row['processor']?>" placeholder="Processor">
		<input type="text" class="form-control mb-2" name="generation" value="<?php echo $row['generation']?>" placeholder="Generation">
		<input type="text" class="form-control mb-2" name="ram" value="<?php echo $row['ram']?>" placeholder="Ram">
		<input type="text" class="form-control mb-2" name="hard_disk" value="<?php echo $row['hard_disk']?>" placeholder="Hard Disk">
		<input type="text" class="form-control mb-2" name="price" value="<?php echo $row['price']?>" placeholder="Price">
		<input type="text" class="form-control mb-2" name="warranty" value="<?php echo $row['warranty']?>" placeholder="Warranty">
		<input type="text" class="form-control mb-2" name="color" value="<?php echo $row['color']?>" placeholder="Color">
		<input type="submit" class="btn btn-success" name="updatedata" value="update laptop">

</form>

<?php 
}
} 
?>


</body>
</html>