<?php
session_start();
if ( !isset($_SESSION['level']) ) {
	header('location: login.php');
	
} 
?>

<!DOCTYPE html>
<html>
<head>

	
	  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    

    
    <title>Pembayaran SPP SMKNC1SARUA</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/smk.png" />


    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>
</head>
<body>
	
	<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <p ><img src="img/smk.png" style=”float:left;” height="50px" width="50px" />
          <a class="navbar-brand" href="./">Pembayaran SPP</a></p>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./">Home</a></li>
            <li><a href="datapetugas.php">DATA PETUGAS </a></li>
            <li><a href="datakelas.php">DATA KELAS</a></li>
            <li><a href="datasiswa.php">DATA SISWA</a></li>
            <li><a href="dataspp.php">DATA SPP</a></li>
            <li><a href="laporan.php">LAPORAN</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>