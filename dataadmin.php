<?php
	include ("dashboard.php");
  include ("connect.php");

  if ($_SESSION['level'] == "admin") {
            header("location: index.php");
          }

?>

    	<h4>Data Admin</h4>
    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInsertAdmin">Tambahkan Data</button>

        <?php
        include ("insertadmin.php");
        include ("selectadmin.php");
        ?>

	</div>
   </body>
</html>