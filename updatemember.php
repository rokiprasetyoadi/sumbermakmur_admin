<?php
          if (isset($_POST['buttonUbah'])) {
            $id_member = $_POST['id_member'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $no_telp = $_POST['no_telp'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $queryupdate = " UPDATE datamember SET nama='$nama',alamat='$alamat',no_telp='$no_telp',email='$email', username='$username', password='$password' WHERE id_member=$id_member;";

            if (mysqli_query($con, $queryupdate)) {
              
            ?>
              <meta http-equiv="refresh" content="0;url=datamember.php"/>
            <?php

            }else{
              echo "Anda gagal mengubah data";
            }
          }
          ?>



<!-- Modal -->
<div class="modal fade" id="modalUbahMember<?php echo $row['id_member'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <?php
          $id = $row['id_member'];
          $queryselectedit = "SELECT * FROM datamember WHERE id_member=$id";
          $resultselectedit = mysqli_query($con, $queryselectedit);
          $rowselectedit = mysqli_fetch_assoc ($resultselectedit);
        ?>

         <form method="POST">
     <div class="modal-body">
      <div class="form-group row" hidden>
          <label for="id_member" class="col-sm-3 col-form-label">Id Member</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="id_member" name="id_member" placeholder="ID Member" value="<?php echo $rowselectedit['id_member']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="nama" class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $rowselectedit['nama']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $rowselectedit['alamat']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="no_telp" class="col-sm-3 col-form-label">No Telp</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No Telp" value="<?php echo $rowselectedit['no_telp']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-3 col-form-label">E-mail</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="<?php echo $rowselectedit['email']; ?>">
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

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" name="buttonUbah">Simpan Perubahan</button>
      </div>
    </form>
    </div>
  </div>
</div>