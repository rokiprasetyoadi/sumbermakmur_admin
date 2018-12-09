        <?php

          if (isset($_POST['buttoninsert'])) {
            $nama_produk = $_POST['nama_produk'];

            $nama_file= $_FILES['nama_file']['name'];

            $kategori= $_POST['kategori'];
            $deskripsi = $_POST['deskripsi'];
            $tanggal = date('y-m-d');
            $stok = $_POST['stok'];
            $harga = $_POST['harga'];

            $queryinsert = "INSERT INTO produk (nama_produk, nama_file, kategori, deskripsi, tanggal, stok, harga)
                  VALUES ('$nama_produk', '$nama_file', '$kategori', '$deskripsi','$tanggal','$stok','$harga')";
            $resultinsert = mysqli_query($con, $queryinsert);

            move_uploaded_file($_FILES['nama_file']['tmp_name'],'foto_produk/'.$_FILES['nama_file']['name']);

          }

        ?>

<!-- Modal Insert-->
<div class="modal fade" id="modalInsertProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Menambahkan Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
         <form method="POST" action="" enctype="multipart/form-data">
     <div class="modal-body">
        <div class="form-group row">
          <label for="nama_produk" class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk">
          </div>
        </div>
        <div class="form-group row">
          <label for="nama_file" class="col-sm-3 col-form-label">Gambar</label>
          <div class="col-sm-8">
            <input type="file" class="form-control" id="nama_file" name="nama_file">
          </div>
        </div>
        <div class="form-group row">
          <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
          <div class="col-sm-8">
          <div class="controls">
              <select name="kategori">
                <option value="alat pertanian">Alat Pertanian</option>
                <option value="benih">Benih</option>
                <option value="bibit">Bibit</option>
                <option value="pupuk">Pupuk</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
          </div>
        </div>
        <div class="form-group row">
          <label for="stok" class="col-sm-3 col-form-label">Stok</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok">
          </div>
        </div>
        <div class="form-group row">
          <label for="harga" class="col-sm-3 col-form-label">Harga</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
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