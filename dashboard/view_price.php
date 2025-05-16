<?php
include 'header.php';
?>


	<div class="col-md-9">
	<div class="container">
	<div class="row">
		<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>Price</th>
				<th>Action</th>
			</tr>
<?php
			include 'connection.php';
			$sql="SELECT * from tbl_price";
			$q = $conn->query($sql);
			while($row = $q->fetch(PDO::FETCH_ASSOC)){
			?>
		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['price'] ?></td>
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

</div>




<?php
include 'footer.php';
?>