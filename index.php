<?php 
include 'header.php';
?>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 5"></button>
       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 6"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/dell.jpg" class="d-block w-100" alt="" style="height: 200px;">
    </div>
    <div class="carousel-item">
      <img src="images/hp.jpg" class="d-block w-100" alt="" style="height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="images/apple.jpg" class="d-block w-100" alt="" style="height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="images/lenovo.jpg" class="d-block w-100" alt="" style="height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="images/asus.jpg" class="d-block w-100" alt="" style="height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="images/microsoft.jpg" class="d-block w-100" alt="" style="height: 400px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<br>
<div class="container"> 
	<div class="row">
	<?php
      include 'connection.php';
        $sql="SELECT * from tbl_add_laptop";
        $q = $conn->query($sql);
        while($row = $q->fetch(PDO::FETCH_ASSOC)){
        ?>	
		<div class="col-md-2">
			<div class="card p-2">
				<img src="images/apple.jpg" style="width: 100%;" class="mb-3">
				<p>Dell 5559<br>Core i3-6200U<br>500G Hard Disk<br>4GB Ram</p>
				<a href="website.php" class="btn btn-success btn-sm">Get Detail</a>
			</div>
		</div>
		<?php } ?>
	</div>

</div>
<br>
<br>
<div class="container"> 
	<div class="row">

		<div class="col-md-2">
			<div class="card p-2">
				<a href=""><img src="images/microsoft.jpg" style="width: 100%;"></a>
			</div>
		</div>
		
	

		<div class="col-md-2">
			<div class="card p-2">
				<a href=""><img src="images/dell.jpg" style="width: 100%;"></a>
			</div>
		</div>
		<div class="col-md-2">
			<div class="card p-2">
				<a href=""><img src="images/hp.jpg" style="width: 100%;"></a>
			</div>
		</div>
		<div class="col-md-2">
			<div class="card p-2">
				<a href=""><img src="images/apple.jpg" style="width: 100%;"></a>
			</div>
		</div>
		<div class="col-md-2">
			<div class="card p-2">
				<a href=""><img src="images/lenovo.jpg" style="width: 100%;"></a>
			</div>
		</div>
		<div class="col-md-2">
			<div class="card p-2">
				<a href=""><img src="images/asus.jpg" style="width: 100%;"></a>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<div class="container"> 
	<div class="row">

		<div class="col-md-2">
			<div class="card p-2">
				<a href="brandlaptop.php?brand=apple"><img src="images/applelogo.png" style="width: 100%;height: 150px;"></a>
			</div>
		</div>
		
<div class="col-md-2">
			<div class="card p-2">
				<a href="brandlaptop.php?brand=dell"><img src="images/delllogo.png" style="width: 100%;height: 150px;"></a>
			</div>
		</div>
		<div class="col-md-2">
			<div class="card p-2">
				<a href="brandlaptop.php?brand=hp"><img src="images/hplogo.png" style="width: 100%;height: 150px;"></a>
			</div>
		</div>
		<div class="col-md-2">
			<div class="card p-2">
				<a href="brandlaptop.php?brand=lenovo"><img src="images/lenovologo.png" style="width: 100%;height: 150px;"></a>
			</div>
		</div>
		<div class="col-md-2">
			<div class="card p-2">
				<a href="brandlaptop.php?brand=asus"><img src="images/asuslogo.png" style="width: 100%;height: 150px;"></a>
			</div>
		</div>
		<div class="col-md-2">
			<div class="card p-2">
				<a href="brandlaptop.php?brand=microsoft"><img src="images/microsoftlogo.png" style="width: 100%;height: 150px;"></a>
			</div>
		</div>
	</div>
</div>






<?php 
include 'footer.php';
?>