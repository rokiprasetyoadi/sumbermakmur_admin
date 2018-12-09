<?php
          if (isset($_POST['buttonUbah'])) {
            $id_admin = $_POST['id_admin'];
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $level = $_POST['level'];

            $queryupdate = " UPDATE dataadmin SET nama='$nama', username='$username', password='$password', level='$level' WHERE id_admin=$id_admin;";

            if (mysqli_query($con, $queryupdate)) {
              
            ?>
              <meta http-equiv="refresh" content="0;url=dataadmin.php"/>
            <?php

            }else{
              echo "Anda gagal mengubah data";
            }
          }
          ?>



<!-- Modal -->
<div class="modal fade" id="modalUbahAdmin<?php echo $row['id_admin'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <?php
          $id = $row['id_admin'];
          $queryselectedit = "SELECT * FROM dataadmin WHERE id_admin=$id";
          $resultselectedit = mysqli_query($con, $queryselectedit);
          $rowselectedit = mysqli_fetch_assoc ($resultselectedit);
        ?>

         <form method="POST">
     <div class="modal-body">
      <div class="form-group row" hidden>
          <label for="id_admin" class="col-sm-3 col-form-label">Id Admin</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="id_admin" name="id_admin" placeholder="ID Admin" value="<?php echo $rowselectedit['id_admin']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="nama" class="col-sm-3 col-form-label">nama</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $rowselectedit['nama']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="username" class="col-sm-3 col-form-label">Username</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $rowselectedit['username']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="password" class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="password" name="password" placeholder="password" value="<?php echo $rowselectedit['password']; ?>">
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
        <p style="color: red"> PERHATIAN!! Periksa Kembali level admin sebelum menyimpan</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" name="buttonUbah">Simpan Perubahan</button>
      </div>
    </form>
    </div>
  </div>
</div>