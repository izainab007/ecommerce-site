<?php 
include 'header.php';
?>

<div class="container">
<div class="row">
		<div class="col-md-3">
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
		</div>		
		<div class="col-md-9">
		<div class="row">
			<div class="col-md-7">
			<center>
				<img class="mySlides" src="images/apple.jpg" style="width: 300px;height: 300px">
				<img class="mySlides" src="images/dell.jpg" style="width: 300px;height: 300px;display: none;">
				<img class="mySlides" src="images/hp.jpg" style="width: 300px;height: 300px;display: none;">
				<img class="mySlides" src="images/lenovo.jpg" style="width: 300px;height: 300px;display: none;">
				<img class="mySlides" src="images/asus.jpg" style="width: 300px;height: 300px;display: none;">
				<img class="mySlides" src="images/microsoft.jpg" style="width: 300px;height: 300px;display: none;">
			</center>
			<br>
			<br>
				<div class="row">
					<div class="col-md-2">
				<img src="images/apple.jpg" style="width: 100%;" onclick="currentDiv(1)">
					</div>
					<div class="col-md-2">
				<img src="images/dell.jpg" style="width: 100%;" onclick="currentDiv(2)">
					</div>
					<div class="col-md-2">
				<img src="images/hp.jpg" style="width: 100%;height: auto;" onclick="currentDiv(3)">
					</div>
					<div class="col-md-2">
				<img src="images/lenovo.jpg" style="width: 100%;height: auto;" onclick="currentDiv(4)">
					</div>
					<div class="col-md-2">
				<img src="images/asus.jpg" style="width: 100%;height: auto;" onclick="currentDiv(5)">
					</div>
					<div class="col-md-2">
				<img src="images/microsoft.jpg" style="width: 100%;height: auto;" onclick="currentDiv(6)">
					</div>
				</div>
			</div>
			<br>
			<br>

			<div class="col-md-5">
		<?php
      include 'connection.php';
      if (isset($_GET['abc'])){
      	$xyz = $_GET['abc'];
        $sql="SELECT * from tbl_add_laptop WHERE id='$xyz'";
        $q = $conn->query($sql);
        while($row = $q->fetch(PDO::FETCH_ASSOC)){
        ?>
				<br>
				<br>
				<h1><?php echo $row['brand']?></h1>
				<p><?php echo $row['model']?>
				<br><?php echo $row['processor']?>
				<br><?php echo $row['generation']?>
				<br><?php echo $row['ram']?>
				<br><?php echo $row['hard_disk']?>
				<br><?php echo $row['price']?>
				<br><?php echo $row['warranty']?>
				<br><?php echo $row['color']?>
			</p>
				<p><a href="" class="btn btn-success">Enroll Now</a> </p>
		<?php } }?>
			</div>
		</div>
		</div>		
	</div>
</div>






<script>
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

<?php 
include 'footer.php';
?>