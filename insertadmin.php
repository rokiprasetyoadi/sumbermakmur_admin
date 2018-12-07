        <?php
          if (isset($_POST['buttoninsert'])) {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $level = $_POST['level'];


          if ($nama=="" || $username==""|| $password==""|| $level=="") {
        ?>
          <div class="alert-danger" role="alert">
            Form tidak boleh ada yang kosong, pastikan semua field terisi
          </div>

        <?php
          }else{
            $queryinsert = "INSERT INTO dataadmin (nama, username, password, level)
                  VALUES ('$nama', '$username','$password','$level');";

            if (mysqli_query($con, $queryinsert)) {
        ?>
          <div class="alert alert-primary" role="alert">
            Anda berhasil menambahkan data admin
          </div>

        <?php
            }else{
        ?>
          <div class="alert-danger" role="alert">
            Anda gagal menambahkan data admin
          </div>
          <?php
            }
          }
        }
        ?>

<!-- Modal -->
<div class="modal fade" id="modalInsertAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
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
        <div class="form-group row">
          <label for="level" class="col-sm-3 col-form-label">Level</label>
          <div class="controls">
              <select name="level">
                <option value="admin">Admin</option>
                <option value="superadmin">Superadmin</option>
              </select>
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