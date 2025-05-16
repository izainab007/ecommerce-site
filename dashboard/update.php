
<?php
    include 'connection.php';
     if(isset($_POST['updatedata'])){
        $id=$_POST['id'];
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
    $sql = "UPDATE tbl_add_laptop SET  
                brand = '$brand', 
                model = '$model', 
                processor='$processor', 
                generation='$generation',
                ram='$ram',
                hard_disk='$hard_disk',
                price='$price',
                warranty='$warranty',
                color='$color'

            WHERE id=$id;";

    // use exec() because no results are returned

    $conn->exec($sql);
    echo "<script type= 'text/javascript'>alert('Record UPDATE Successfully!');</script>";
    header('location:index.php');
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
     }
?>





</div>