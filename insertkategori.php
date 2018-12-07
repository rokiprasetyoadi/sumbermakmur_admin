        <?php
          if (isset($_POST['buttoninsert'])) {
            $kategori = $_POST['kategori'];

          if ($kategori=="") {
        ?>
          <div class="alert-danger" role="alert">
            Form tidak boleh ada yang kosong, pastikan semua field terisi
          </div>

        <?php
          }else{
            $queryinsert = "INSERT INTO kategori (kategori)
                  VALUES ('$kategori');";

            if (mysqli_query($con, $queryinsert)) {
        ?>
          <div class="alert alert-primary" role="alert">
            Anda berhasil menambahkan data kategori
          </div>

        <?php
            }else{
        ?>
          <div class="alert-danger" role="alert">
            Anda gagal menambahkan data kategori
          </div>
          <?php
            }
          }
        }
        ?>

<!-- Modal -->
<div class="modal fade" id="modalInsertKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Menambahkan Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
         <form method="POST">
     <div class="modal-body">
        <div class="form-group row">
          <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori">
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