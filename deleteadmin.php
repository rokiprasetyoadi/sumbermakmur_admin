<?php

  if (isset($_POST['btnpros'])) {
    $id_admin = $_POST['id_admin'];

    $querydelete = "DELETE FROM dataadmin WHERE id_admin=$id_admin;";

    if (mysqli_query($con, $querydelete)) {
  ?>
    <meta http-equiv="refresh" content="0;url=dataadmin.php"/>
  <?php
    }else{
      echo "Anda gagal menghapus data admin";
    }
  }
?>


<!-- modal hapus admin -->
<form method="POST">
<div class="modal fade" id="modalHapusAdmin<?php echo $row['id_admin']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?php
          $id = $row['id_admin'];
          $queryhapus = "SELECT * FROM dataadmin WHERE id_admin=$id";
          $resulthapus = mysqli_query($con, $queryhapus);
          $rowhapus = mysqli_fetch_assoc ($resulthapus);
        ?>

      <div class="modal-body">
          <div class="form-group row">
            <input type="hidden" name="id_admin" value="<?php echo $id; ?>">
            Apakah anda yakin ingin menghapus data &nbsp; <strong><?php echo $rowhapus['nama'];?></strong>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" name="btnpros">Hapus</button>
      </div>
    </form>
    </div>
  </div>
</div>