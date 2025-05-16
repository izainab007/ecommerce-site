<?php include 'header.php' ?>



<div class="container" style="width: 190px;border:1px solid #ddd;height: 220px;border-radius: 5px;
 margin-top: 30px;padding: 0px;" >  <br>

<form method="POST" action="login.php">
<h4 style="margin-left: 20px;"><strong>Administrator Panel</strong></h4><br>
<label style="background-color: #000;color: #fff;margin-right: 12px;width: 93px;">User Name</label>
<input type="text" name="username" placeholder="User Name" style="margin-left: 10px"><br><br>
<label style="background-color: #000;color: #fff;margin-right: 12px;width: 93px;">Password</label>
<input type="password" name="password" placeholder="Password" style="margin-left: 10px"><br><br>

<button type="submit" name="login" class="btn btn-basic btn-md" style="float: right;margin-right: 25px;">
<span><i class="fa fa-sign-in btn-xs"></i></span>Log In</button>
</form>

  
</div><!--end of container-->

<!--Login form query-->
<?php

  $name = "";
  $email  = "";
  $errors = array();

  //connect to the database
  $db =mysqli_connect('localhost','root', '' , 'dashboard');

  // if the register button is clicked
  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
      array_push($errors, "username is required");
    }
    if (empty($password)) {
      array_push($errors, "password is required");
    }

 $query ="SELECT * FROM tbl_register WHERE username='$username' and password='$password'";
 
  $result = mysqli_query($db,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
        if($rows==1){

          $_SESSION['username'] = $username;
      header('location: index.php');

        echo "login success";

       }else{   echo "unsuccessful";     
  }
}

?>
<!--End of login form query-->



<!--Error-->

<?php if (count($errors) > 0): ?>
  <div class="error">
  <?php foreach ($errors as $error): ?>
    <p><?php echo $error; ?></p>
  <?php endforeach ?>
  </div>
<?php endif ?>


<!--End of Error-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php include 'footer.php' ?>