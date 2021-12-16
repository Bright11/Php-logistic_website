<?php 
session_start();
include('db.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Logistic</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/0560d0caf7.js"></script>
	<link rel="stylesheet" type="text/css" href="../style/css/mystyle.css">
  <link rel="stylesheet" type="text/css" href="../style/css/admin.css">
</head>
<body>
<div class="container-fluid">
  <div class="col-md-12">
<div class="main_header">
  <p> <i class="fas fa-clock" style="color: #CCB331;"></i> Monday-Sunday 8.00 = 18.00<span><i class="fa fa-phone"style="color: #CCB331;"></i> 0543461813</span><p>
</div>
</div>
</div>

<!-- start header -->
	<header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="mynav">
  <div class="container">
    <a class="navbar-brand" href="index.html"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
         <?php if (isset($_SESSION['memail'])) {
           ?>
           <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <?php
         }  
        else{
          ?>
          <li class="nav-item">
          <a class="nav-link" href="managerlogin.php">Login</a>
        </li>
          <?php
         }
         ?>
      </ul>
    </div>
  </div>
</nav>
<style>
.main_header{
  background-color: #002E5B;
  height: 40px;
  padding-top: 10px;
  padding-bottom: 10px;
  
  color: #F1F6FF;
  font-size: 10px;
  font-weight: normal;
  /*
position: relative;
  padding-left: 50px;
  
  */
}
</style>