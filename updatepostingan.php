<?php
	include ("dashboard.php");
  include ("connect.php");
?>

    	<h4>Artikel</h4>
    	&nbsp;

    	<?php
          if (isset($_POST['simpan'])) {
            $id_artikel = $_POST['id_artikel'];
            $judul_artikel = $_POST['judul_artikel'];
            $deskripsi = $_POST['deskripsi'];
            $tanggal = date('y-m-d');


          $queryupdate = " UPDATE artikel SET judul_artikel='$judul_artikel',deskripsi='$deskripsi', tanggal='$tanggal' WHERE id_artikel=$id_artikel;";

            if (mysqli_query($con, $queryupdate)) {
              
            ?>
              <meta http-equiv="refresh" content="0;url=datapost.php"/>
            <?php

            }else{
              echo "Anda gagal mengubah data";
            }
          }
          ?>

          <?php
            $id = $_GET['id'];
            $queryselectedit = "SELECT * FROM artikel WHERE id_artikel=$id";
            $resultselectedit = mysqli_query($con, $queryselectedit);
            $rowselectedit = mysqli_fetch_assoc ($resultselectedit);
          ?>

    	<form method="POST" action="" enctype="multipart/form-data">
		  <div class="form-group" style="width: 700px;">
        <label for="exampleInputJudul">Id Artikel</label>
        <input type="text" class="form-control" id="id_artikel" name="id_artikel" placeholder="ID Artikel" value="<?php echo $rowselectedit['id_artikel']; ?>">
      </div>
      <div class="form-group" style="width: 250px;">
		    <label for="exampleInputJudul">Judul</label>
		    <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" placeholder="Judul" value="<?php echo $rowselectedit['judul_artikel']; ?>">
		  </div>

		 <textarea class="ckeditor" name="deskripsi" cols="10" rows="40" name="pesan"><?php echo $rowselectedit['deskripsi']; ?></textarea>

    	<div style="height: 20px;"></div>
    	<a class="btn btn-danger" href="datapost.php" role="button">Kembali</a>
    	<button type="submit" class="btn btn-success" name="simpan">Simpan</button>
		</form>

	</div>
   </body>
</html>