        <?php
          if (isset($_POST['buttoninsert'])) {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $no_telp = $_POST['no_telp'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = md5($_POST['password']);


          if ($nama=="" || $alamat==""|| $no_telp==""|| $email==""|| $username==""|| $password=="") {
        ?>
          <div class="alert-danger" role="alert">
            Form tidak boleh ada yang kosong, pastikan semua field terisi
          </div>

        <?php
          }else{
            $queryinsert = "INSERT INTO datamember (nama, alamat, no_telp, email, username, password)
                  VALUES ('$nama', '$alamat', '$no_telp', '$email', '$username','$password');";

            if (mysqli_query($con, $queryinsert)) {
        ?>
          <div class="alert alert-primary" role="alert">
            Anda berhasil menambahkan data member
          </div>

        <?php
            }else{
        ?>
          <div class="alert-danger" role="alert">
            Anda gagal menambahkan data member
          </div>
          <?php
            }
          }
        }
        ?>

<!-- Modal -->
<div class="modal fade" id="modalInsertMember" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
          <label for="nama" class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
          </div>
        </div>
        <div class="form-group row">
          <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
          </div>
        </div>
        <div class="form-group row">
          <label for="no_telp" class="col-sm-3 col-form-label">No Telp</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No Telp">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-3 col-form-label">E-mail</label>
          <div class="col-sm-8">
            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
          </div>
        </div>
        <div class="form-group row">
          <label for="username" class="col-sm-3 col-form-label">Username</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
          </div>
        </div>
        <div class="form-group row">
          <label for="password" class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
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