<?php
	include("dashboard.php");
	include ("connect.php");
?>

    	<h4>Data Member</h4>
    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInsertMember">Tambahkan Data</button>

        <?php
        include ("insertmember.php");
        include ("selectmember.php");
        ?>

  </div>
   </body>
</html>