<?php
          if (isset($_POST['buttonUbah'])) {
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



<!-- Modal -->
<div class="modal fade" id="modalUbahArtikel<?php echo $row['id_artikel'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <?php
          $id = $row['id_artikel'];
          $queryselectedit = "SELECT * FROM artikel WHERE id_artikel=$id";
          $resultselectedit = mysqli_query($con, $queryselectedit);
          $rowselectedit = mysqli_fetch_assoc ($resultselectedit);
        ?>

         <form method="POST">
     <div class="modal-body">
      <div class="form-group row" hidden>
          <label for="id_artikel" class="col-sm-3 col-form-label">Id Artikel</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="id_artikel" name="id_artikel" placeholder="ID Artikel" value="<?php echo $rowselectedit['id_artikel']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="judul" class="col-sm-3 col-form-label">Judul</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value="<?php echo $rowselectedit['judul_artikel']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
          <div class="col-sm-8">
            <textarea class="ckeditor" name="deskripsi" cols="10" rows="40" value="<?php echo $rowselectedit['deskripsi']; ?>" ></textarea>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" name="buttonUbah">Simpan Perubahan</button>
      </div>
    </form>
    </div>
  </div>
</div>