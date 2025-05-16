<?php 
include 'header.php';
?>

	<div class="container">
<div class="row">
		<div class="col-md-3">
      <br>
      <br>
			<div class="card" style="width: 18rem;">
			  <ul class="list-group list-group-flush">
			    <a href="brandlaptop.php?brand=apple" class="text-decoration-none"><li class="list-group-item ">Apple</li></a>
			    <a href="brandlaptop.php?brand=dell" class="text-decoration-none"><li class="list-group-item">Dell</li></a>
			    <a href="brandlaptop.php?brand=hp" class="text-decoration-none"><li class="list-group-item">HP</li></a>
          <a href="brandlaptop.php?brand=lenovo" class="text-decoration-none"><li class="list-group-item">Lenovo</li></a>
          <a href="brandlaptop.php?brand=asus" class="text-decoration-none"><li class="list-group-item">Asus</li></a>
          <a href="brandlaptop.php?brand=microsoft" class="text-decoration-none"><li class="list-group-item">Microsoft</li></a>
			  </ul>
			</div>
       <br>
      <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <a href="ramlaptop.php?ram=4gb" class="text-decoration-none"><li class="list-group-item ">4GB</li></a>
          <a href="ramlaptop.php?ram=8gb" class="text-decoration-none"><li class="list-group-item">8GB</li></a>
          <a href="ramlaptop.php?ram=12gb" class="text-decoration-none"><li class="list-group-item">12GB</li></a>
        </ul>
      </div>
      <br>
      <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <a href="colorlaptop.php?color=black" class="text-decoration-none"><li class="list-group-item ">Black</li></a>
          <a href="colorlaptop.php?color=white" class="text-decoration-none"><li class="list-group-item">White</li></a>
          <a href="colorlaptop.php?color=maroon" class="text-decoration-none"><li class="list-group-item">Maroon</li></a>
          <a href="colorlaptop.php?color=grey" class="text-decoration-none"><li class="list-group-item">Grey</li></a>
        </ul>
      </div>
        <br>
      <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <a href="genlaptop.php?generation=4thgen" class="text-decoration-none"><li class="list-group-item ">4 th Gen</li></a>
          <a href="genlaptop.php?generation=6thgen" class="text-decoration-none"><li class="list-group-item">6 th Gen</li></a>
          <a href="genlaptop.php?generation=8thgen" class="text-decoration-none"><li class="list-group-item">8 th Gen</li></a>
          <a href="genlaptop.php?generation=10thgen" class="text-decoration-none"><li class="list-group-item">10th Gen</li></a>
        </ul>
      </div>
		</div>		
		<div class="col-md-9">
      <br>
      <br>
	<?php
      include 'connection.php';
        $sql="SELECT * from tbl_add_laptop";
        $q = $conn->query($sql);
        while($row = $q->fetch(PDO::FETCH_ASSOC)){
        ?>		
<div class="card" style="width: 238px;float: left;margin: 15px;">
<center>
  <img src="images/dell.jpg" class="card-img-top" style="height: 150px;width: 150px;">
</center>
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['brand']?></h5>
    <p class="card-text"><?php echo $row['model']?>&nbsp;&nbsp;<?php echo $row['processor']?></p>
    <a href="laptop-detail.php?abc=<?php echo $row['id']?>" class="btn btn-primary">visit</a>
  </div>
</div>
<?php } ?>

		</div>		
	</div>
</div>






<?php 
include 'footer.php';
?>