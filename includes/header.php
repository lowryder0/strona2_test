<?php
  include_once 'includes/session.php'
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/site.css">

    <title>Super - <?php echo $title ?></title>
  </head>

  <body>
    <div class="container">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Strona Młodości</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewrecord.php">View Attendees</a>
        </li>
        <div class="navbar-nav ml-auto">
          <?php 
              if(!isset($_SESSION['userid']))
              {
          ?>
            <a class="nav-item nav-link" href="login.php">Login <span class="sr-only"></span></a>
          <?php 
              } 
        else 
              { 
          ?>
            <a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span> <span class="sr-only"></span></a>
            <a class="nav-item nav-link" href="logout.php">Logout <span class="sr-only"></span></a>
          <?php 
              } 
          ?>
        </div>
        
        
      </ul>
    </div>
  </div>
</nav>
<br>
<br>