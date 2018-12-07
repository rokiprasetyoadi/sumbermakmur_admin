<!DOCTYPE html>
<html>
<head>
	<title>Sumber Makmur ADMIN</title>
	<link rel="icon" type="image/png" href="gambar/logo2.png"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

	<?php

        include ("connect.php");

        if (isset($_POST['acc'])) {
          $username = $_POST['username'];
          $password = md5($_POST['password']);

          $sqlselect = "SELECT *FROM dataadmin WHERE username='$username' AND password='$password'";
          $result = mysqli_query($con, $sqlselect);
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

          if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['level'] = $row['level'];

            header("location: index.php");
          }else{
            echo "<div class='alert alert-danger' role='alert'>Login Gagal!! Periksa kembali username dan password anda</div>";
          }

          mysqli_close($con);
        }
      ?>

	<div class="container" style="background-color: #F1F1F1; margin-top: 125px; padding: 40px;" align="center">
		<img src="Gambar/logo2.png" style="float: left; height: 300px; width: 300px; margin-left: 50px;">
		<div class="form1" style="margin-top: 50px; margin-left: 350px;">
		<h4> FORM LOGIN </h4>
		&nbsp;
		<form method="POST">
		<div class="form">
          	<div class="col-sm-8">
            	<input type="text" class="form-control" name="username" placeholder="Username" style="width: 400px;">
          	</div>
        </div>
        &nbsp;
        <div class="form">
          	<div class="col-sm-8">
            	<input type="Password" class="form-control" name="password" placeholder="Password" style="width: 400px;">
         	 </div>
         &nbsp;
		  <div class="form-group form-check">
		    <label class="form-check-label">
        <a href="#"> Lupa Password </a>
		    </label>
		  </div>
		  <button type="submit" class="btn btn-primary" name="acc">Submit</button>
		</div>
		</form>
	</div>
</body>
</html>