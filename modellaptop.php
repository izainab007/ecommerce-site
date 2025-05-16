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
          <a href="brandlaptop.php?model=dell" class="text-decoration-none"><li class="list-group-item ">Dell 4050</li></a>
          <a href="brandlaptop.php?model=hp" class="text-decoration-none"><li class="list-group-item">HP 450 G3</li></a>
          <a href="brandlaptop.php?model=apple" class="text-decoration-none"><li class="list-group-item">Apple Macbook Pros</li></a>
          <a href="brandlaptop.php?model=lenovo" class="text-decoration-none"><li class="list-group-item">Lenovo Yoga 6</li></a>
          <a href="brandlaptop.php?model=asus" class="text-decoration-none"><li class="list-group-item">ASUS NOTEPAD</li></a>
          <a href="brandlaptop.php?model=microsoft" class="text-decoration-none"><li class="list-group-item">MICROSOFT Surface</li></a>
        </ul>
      </div>
    </div>    
    <div class="col-md-9">
      <br>
      <br>
  <?php
      include 'connection.php';
      if (isset($_GET['model'])){
        $model = $_GET['model'];
        $sql="SELECT * from tbl_add_laptop WHERE model='$model'";
        $q = $conn->query($sql);
        while($row = $q->fetch(PDO::FETCH_ASSOC)){
        ?>    
<div class="card" style="width: 238px;float: left;margin: 15px;">
<center>
  <img src="images/dell.jpg" class="card-img-top" style="height: 150px;width: 150px;">
</center>
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['model']?></h5>
    <p class="card-text"><?php echo $row['ram']?>&nbsp;&nbsp;<?php echo $row['processor']?></p>
    <a href="delldetail.php?abc=<?php echo $row['id']?>" class="btn btn-primary">visit</a>
  </div>
</div>
<?php } }?>

    </div>    
  </div>
</div>






<?php 
include 'footer.php';
?>