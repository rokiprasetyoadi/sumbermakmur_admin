<?php
	include('dashboard.php');
  include('connect.php');
?>

    	<h4>Produk</h4>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInsertKategori"> Tambahkan Produk </button>
    	<div class="dataproduk">
    	
        <?php
          include ("insertkategori.php");
          include ("selectkategori.php");
        ?>
    	</div>

      
    </div>
  </div>
</div>

</body>
</html>