<?php
	include("dashboard.php");
	include ("connect.php");
?>

    	<h4>Post</h4>
    	<a type="button" href="postingan.php" class="btn btn-primary">Tambahkan Data</a>

        <?php
        include ("insertpost.php");
        include ("selectpost.php");
        ?>

  </div>
   </body>
</html>