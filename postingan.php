<?php
	include ("dashboard.php");
  	include ("connect.php");
?>

    	<h4>Artikel</h4>
    	&nbsp;

    	<?php
          if (isset($_POST['simpan'])) {
            $judul_artikel = $_POST['judul_artikel'];

             $foto= $_FILES['foto']['name'];

            $deskripsi = $_POST['deskripsi'];
            $tanggal = date('y-m-d');


          $queryinsert = "INSERT INTO artikel (judul_artikel, foto, deskripsi, tanggal)
                  VALUES ('$judul_artikel', '$foto','$deskripsi','$tanggal')";

            $resultinsert = mysqli_query($con, $queryinsert);
            move_uploaded_file($_FILES['foto']['tmp_name'],'foto_artikel/'.$_FILES['foto']['name']);

            ?>
            <meta http-equiv="refresh" content="0;url=datapost.php"/>
            <?php

        }

        ?>
    	<form method="POST" action="" enctype="multipart/form-data">
		  <div class="form-group" style="width: 700px;">
		    <label for="exampleInputJudul">Judul</label>
		    <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" placeholder="Judul">
		  </div>
		  <div class="form-group" style="width: 250px;">
		    <label for="exampleInputTanggal">Foto</label>
		    <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto">
		  </div>

		 <textarea class="ckeditor" name="deskripsi" cols="10" rows="40" name="pesan"></textarea>
    	<div style="height: 20px;"></div>
    	<a class="btn btn-danger" href="datapost.php" role="button">Kembali</a>
    	<button type="submit" class="btn btn-success" name="simpan">Simpan</button>
		</form>

	</div>
   </body>
</html>