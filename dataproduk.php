<?php
	include('dashboard.php');
  include('connect.php');
?>

    	<h4>Produk</h4>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInsertProduk"> Tambahkan Produk </button>
    	<div class="dataproduk">
    	
        <?php
          include ("insertproduk.php");
          include ("selectproduk.php");
        ?>
    	</div>

      
    </div>
  </div>
</div>

</body>
</html>