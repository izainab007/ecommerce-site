<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Myshop.pk</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" aria-current="page" href="all-laptop.php">All Laptop</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">About Us</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Contact Us</a>
        </li>
           <li class="nav-item">
          <a class="nav-link" aria-current="page" href="register.php">Register</a>
        </li>
           <li class="nav-item">
          <a class="nav-link" aria-current="page" href="login.php">Login</a>
        </li>
      </ul>

        <?php if (isset($_SESSION["username"])): ?> 
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo 'Welcome ,'. $_SESSION['username']; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">View Profile</a></li>
            <li><a class="dropdown-item" href="#">Change Password</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </div>
        <?php endif ?>
    </div>
  </div>
</nav>