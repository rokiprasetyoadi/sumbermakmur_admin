<?php
    session_start();

    if (!isset($_SESSION['nama'])) {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sumber Makmur</title>
	<link rel="icon" type="image/png" href="gambar/logo2.png"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    

</head>
<body>
	<div class="container-fluid">
  <div class="row">
    <div class="sidebar" style="background-color: #F1F1F1; width: 15%; float: left; padding: 10px; height: 700px;">
    	<img src="Gambar/logo2.png" style="height: 160px; width: 100%;">
    	 <?php
            if ($_SESSION['level'] == "superadmin") {
            echo '
             <div class="list-group">
                <a href="index.php" class="list-group-item list-group-item-action"> <i class="fa fa-bars"></i>&nbsp;&nbsp;Dashboard</a>
                <a href="dataproduk.php" class="list-group-item list-group-item-action"><i class="fa fa-cube"></i>&nbsp;&nbsp;Produk</a>
                <a href="datakategori.php" class="list-group-item list-group-item-action"><i class="fa fa-tags"></i>&nbsp;&nbsp;Kategori</a>
                <a href="datatransaksi.php" class="list-group-item list-group-item-action"><i class="fa fa-cart-arrow-down"></i>&nbsp;&nbsp;Transaksi</a>
                <a href="verifikasi.php" class="list-group-item list-group-item-action"><i class="fa fa-handshake-o"></i>&nbsp;&nbsp;Verifikasi</a>
                <a href="dataadmin.php" class="list-group-item list-group-item-action"><i class="fa fa-address-card"></i>&nbsp;&nbsp;Data Admin</a>
                <a href="datamember.php" class="list-group-item list-group-item-action"><i class="fa fa-address-card-o"></i>&nbsp;&nbsp;Data Member</a>
                <a href="datapost.php" class="list-group-item list-group-item-action"><i class="fa fa-file-word-o"></i>&nbsp;&nbsp;Post</a>
            </div>
            ';
            }else{
            echo '
            <div class="list-group">
                <a href="index.php" class="list-group-item list-group-item-action"> <i class="fa fa-bars"></i>&nbsp;&nbsp;Dashboard</a>
                <a href="dataproduk.php" class="list-group-item list-group-item-action"><i class="fa fa-cube"></i>&nbsp;&nbsp;Produk</a>
                <a href="datakategori.php" class="list-group-item list-group-item-action"><i class="fa fa-tags"></i>&nbsp;&nbsp;Kategori</a>
                <a href="datatransaksi.php" class="list-group-item list-group-item-action"><i class="fa fa-cart-arrow-down"></i>&nbsp;&nbsp;Transaksi</a>
                <a href="verifikasi.php" class="list-group-item list-group-item-action"><i class="fa fa-handshake-o"></i>&nbsp;&nbsp;Verifikasi</a>
                <a href="datamember.php" class="list-group-item list-group-item-action"><i class="fa fa-address-card-o"></i>&nbsp;&nbsp;Data Member</a>
                <a href="datapost.php" class="list-group-item list-group-item-action"><i class="fa fa-file-word-o"></i>&nbsp;&nbsp;Post</a>
            </div>
            ';
        }
        ?>

        &nbsp;
        <div class="list-group">
            <a href="logout.php" class="list-group-item list-group-item-action"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Keluar</a>
        </div>
        
    </div>
    <div class="sidebar-right" style="background-color: #D6DDE5; width: 85%; padding: 4px">
        <div class="namebar" style="background-color: #40AB9B; height: 40px; width: 100%;">
            <div style="float: left;margin-top: 8px; width: 100%;">
                <marquee style="color: white;"> Toko Pertanian Sumber Makmur menjual kebutuhan pertanian, seperti pupuk, bibit, benih, alat pertanian dan lain-lain. Lokasi toko di Jl. Nasional III, Tembaan, Kepatihan, Kaliwates, Jember, Jawa timur. </marquee>
            </div>

            <a class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="float: right;margin-top: 1px; height: 40px;"><i class="fa fa-user-circle-o"></i>&nbsp;&nbsp;<?php echo $_SESSION['nama']; ?></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Informasi akun : </a>
                <a class="dropdown-item" href="#"><?php echo $_SESSION['nama']; ?></a>
                <a class="dropdown-item" href="#"><?php echo $_SESSION['level']; ?></a>
            </div>
        </div>
        <div class="content" style="padding: 10px; margin-top: 20px; margin-left: 10px;">

