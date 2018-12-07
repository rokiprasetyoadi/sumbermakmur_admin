        <?php
          if (isset($_POST['buttoninsert'])) {
            $judul_artikel = $_POST['judul_artikel'];

            $foto= $_FILES['foto']['name'];

            $deskripsi = $_POST['deskripsi'];
            $tanggal = $_POST['tanggal'];

            $queryinsert = "INSERT INTO artikel (judul_artikel, foto, deskripsi, tanggal)
                  VALUES ('$judul_artikel', '$foto','$deskripsi','$tanggal')";

            $resultinsert = mysqli_query($con, $queryinsert);
            move_uploaded_file($_FILES['foto']['tmp_name'],'foto_artikel/'.$_FILES['foto']['name']);

        }
        ?>

<!-- Modal -->
<div class="modal fade" id="modalInsertPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Menambahkan Data Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
         <form method="POST" action="" enctype="multipart/form-data">
     <div class="modal-body">
        <div class="form-group row">
          <label for="judul_artikel" class="col-sm-3 col-form-label">Judul Artikel</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" placeholder="Judul Artikel">
          </div>
        </div>
        <div class="form-group row">
          <label for="foto" class="col-sm-3 col-form-label">Foto</label>
          <div class="col-sm-8">
            <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto">
          </div>
        </div>
        <div class="form-group row">
          <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
          <div class="col-sm-8">
            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
          </div>
        </div>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" name="buttoninsert">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>