<?php
          if (isset($_POST['buttonUbah'])) {
            $id_kategori = $_POST['id_kategori'];
            $kategori = $_POST['kategori'];

            $queryupdate = " UPDATE kategori SET kategori='$kategori' WHERE id_kategori=$id_kategori";

            if (mysqli_query($con, $queryupdate)) {
              
            ?>
              <meta http-equiv="refresh" content="0;url=datakategori.php"/>
            <?php

            }else{
              echo "Anda gagal mengubah data kategori";
            }
          }
          ?>



<!-- Modal -->
<div class="modal fade" id="modalUbahKategori<?php echo $row['id_kategori'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <?php
          $id = $row['id_kategori'];
          $queryselectedit = "SELECT * FROM kategori WHERE id_kategori=$id";
          $resultselectedit = mysqli_query($con, $queryselectedit);
          $rowselectedit = mysqli_fetch_assoc ($resultselectedit);
        ?>

         <form method="POST">
     <div class="modal-body">
      <div class="form-group row" hidden>
          <label for="id_kategori" class="col-sm-3 col-form-label">Id Kategori</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="id_kategori" name="id_kategori" placeholder="ID Kategori" value="<?php echo $rowselectedit['id_kategori']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori" value="<?php echo $rowselectedit['kategori']; ?>">
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