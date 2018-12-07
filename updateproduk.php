<?php
          if (isset($_POST['buttonUbah'])) {
            $id_produk = $_POST['id_produk'];
            $nama_produk = $_POST['nama_produk'];
            $id_kategori = $_POST['id_kategori'];
            $deskripsi = $_POST['deskripsi'];
            $tanggal = date('y-m-d');
            $stok = $_POST['stok'];
            $harga = $_POST['harga'];

            $queryupdate = " UPDATE produk SET nama_produk='$nama_produk', id_kategori='id_kategori', deskripsi='$deskripsi', tanggal='$tanggal', stok='$stok', harga='$harga' WHERE id_produk=$id_produk;";

            if (mysqli_query($con, $queryupdate)) {
              
            ?>
              <meta http-equiv="refresh" content="0;url=dataproduk.php"/>
            <?php

            }else{
              echo "Anda gagal mengubah data";
            }
          }
          ?>



<!-- Modal -->
<div class="modal fade" id="modalUbahProduk<?php echo $row['id_produk'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <?php
          $id = $row['id_produk'];
          $queryselectedit = "SELECT * FROM produk WHERE id_produk=$id";
          $resultselectedit = mysqli_query($con, $queryselectedit);
          $rowselectedit = mysqli_fetch_assoc ($resultselectedit);
        ?>

         <form method="POST">
     <div class="modal-body">
      <div class="form-group row" hidden>
          <label for="id_produk" class="col-sm-3 col-form-label">Id Produk</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="id_produk" name="id_produk" placeholder="ID Produk" value="<?php echo $rowselectedit['id_produk']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="nama_produk" class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama" value="<?php echo $rowselectedit['nama_produk']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="level" class="col-sm-3 col-form-label">Kategori</label>
          <div class="col-sm-8">
          <div class="controls">
              <select name="id_kategori">
                <?php
                    $querykategori = mysqli_query($con, "SELECT * FROM kategori");
                    while($row = mysqli_fetch_array($querykategori)){
                       echo "<option value='$row[id_kategori]'>$row[kategori]</option>";
                    }
                 ?>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" value="<?php echo $rowselectedit['deskripsi']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="stok" class="col-sm-3 col-form-label">Stok</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok" value="<?php echo $rowselectedit['stok']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="harga" class="col-sm-3 col-form-label">Harga</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="<?php echo $rowselectedit['harga']; ?>">
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