<?php
include 'header.php';
?>
<div class="col-md-9">
	
<div class="container">
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-6">
			<br>


			<div class="card p-3">
<?php
include 'connection.php';
?>
				<form action="add_laptop.php" method="POST">
					<select name="brand" class="form-control mb-2">
			            <?php
						include 'connection.php';
						$sql="SELECT * from tbl_brand";
						$q = $conn->query($sql);
						while($row = $q->fetch(PDO::FETCH_ASSOC)){
						?>

						<option value="<?php echo $row['brand']?>"><?php echo $row['brand']?></option>

						<?php
						}
						?>
					</select>
					<select name="model" class="form-control mb-2">
			            <?php
						include 'connection.php';
						$sql="SELECT * from tbl_model";
						$q = $conn->query($sql);
						while($row = $q->fetch(PDO::FETCH_ASSOC)){
						?>

						<option value="<?php echo $row['model']?>"><?php echo $row['model']?></option>

						<?php
						}
						?>
					</select>
					<select name="processor" class="form-control mb-2">
			            <?php
						include 'connection.php';
						$sql="SELECT * from tbl_processor";
						$q = $conn->query($sql);
						while($row = $q->fetch(PDO::FETCH_ASSOC)){
						?>

						<option value="<?php echo $row['processor']?>"><?php echo $row['processor']?></option>

						<?php
						}
						?>
					</select>
					<select name="generation" class="form-control mb-2">
			            <?php
						include 'connection.php';
						$sql="SELECT * from tbl_generation";
						$q = $conn->query($sql);
						while($row = $q->fetch(PDO::FETCH_ASSOC)){
						?>

						<option value="<?php echo $row['generation']?>"><?php echo $row['generation']?></option>

						<?php
						}
						?>
					</select>
					<select name="ram" class="form-control mb-2">
			            <?php
						include 'connection.php';
						$sql="SELECT * from tbl_ram";
						$q = $conn->query($sql);
						while($row = $q->fetch(PDO::FETCH_ASSOC)){
						?>

						<option value="<?php echo $row['ram']?>"><?php echo $row['ram']?></option>

						<?php
						}
						?>
					</select>
					<select name="hard_disk" class="form-control mb-2">
			            <?php
						include 'connection.php';
						$sql="SELECT * from tbl_hard_disk";
						$q = $conn->query($sql);
						while($row = $q->fetch(PDO::FETCH_ASSOC)){
						?>

						<option value="<?php echo $row['hard_disk']?>"><?php echo $row['hard_disk']?></option>

						<?php
						}
						?>
					</select>
					<select name="price" class="form-control mb-2">
			            <?php
						include 'connection.php';
						$sql="SELECT * from tbl_price";
						$q = $conn->query($sql);
						while($row = $q->fetch(PDO::FETCH_ASSOC)){
						?>

						<option value="<?php echo $row['price']?>"><?php echo $row['price']?></option>

						<?php
						}
						?>
					</select>
					<select name="warranty" class="form-control mb-2">
			            <?php
						include 'connection.php';
						$sql="SELECT * from tbl_warranty";
						$q = $conn->query($sql);
						while($row = $q->fetch(PDO::FETCH_ASSOC)){
						?>

						<option value="<?php echo $row['warranty']?>"><?php echo $row['warranty']?></option>

						<?php
						}
						?>
					</select>
					<select name="color" class="form-control mb-2">
			            <?php
						include 'connection.php';
						$sql="SELECT * from tbl_color";
						$q = $conn->query($sql);
						while($row = $q->fetch(PDO::FETCH_ASSOC)){
						?>

						<option value="<?php echo $row['color']?>"><?php echo $row['color']?></option>

						<?php
						}
						?>
					</select>
					<input type="submit" class="btn btn-success" name="addlaptop" value="add new laptop">
				</form>
<?php 

if (isset($_POST['addlaptop'])){
	$brand = $_POST['brand'];
	$model = $_POST['model'];
	$processor = $_POST['processor'];
	$generation = $_POST['generation'];
	$ram = $_POST['ram'];
	$hard_disk = $_POST['hard_disk'];
	$price = $_POST['price'];
	$warranty = $_POST['warranty'];
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
			</div>
		</div>

		<div class="col-md-3">
			
		</div>
	</div>
</div>

</div>
</div>


<?php
include 'footer.php';
?>