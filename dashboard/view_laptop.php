<?php
include 'header.php';
?>
<div class="col-md-9">
	

<div class="container">
	<div class="row">
		
			
		<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>Brand</th>
				<th>Model</th>
				<th>Processor</th>
				<th>Generation</th>
				<th>Ram</th>
				<th>Hard Disk</th>
				<th>Price</th>
				<th>Warranty</th>
				<th>Color</th>
				<th colspan="3">Action</th>
			</tr>	
			<?php
			include 'connection.php';
				$sql="SELECT * from tbl_add_laptop";
				$q = $conn->query($sql);
				while($row = $q->fetch(PDO::FETCH_ASSOC)){
				?>
		

			<tr>
				<td><?php echo $row['id']?></td>
				<td><?php echo $row['brand'] ?></td>
				<td><?php echo $row['model'] ?></td>
				<td><?php echo $row['processor'] ?></td>
				<td><?php echo $row['generation']?></td>
				<td><?php echo $row['ram']?></td>
				<td><?php echo $row['hard_disk']?></td>
				<td><?php echo $row['price']?></td>
				<td><?php echo $row['warranty']?></td>
				<td><?php echo $row['color']?></td>
				<td><a href="edit.php?abc=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a></td>
				<td><a href="delete.php?abc=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
			</tr>

			

<?php
} 
?>

		</table>
			
		
	</div>
</div>

</div>
</div>


<?php
include 'footer.php';
?>