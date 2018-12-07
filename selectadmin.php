<?php
  $queryselect = " SELECT *FROM dataadmin";
  $resultselect = mysqli_query($con, $queryselect);
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAMA</th>
      <th scope="col">USERNAME</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">LEVEL</th>
      <th scope="col" colspan="2" style="text-align: center;">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($row = mysqli_fetch_array($resultselect)){
    ?>
        <tr>
          <td><?php echo $row['id_admin']; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['username']; ?></td>
          <td>***</td>
          <td><?php echo $row['level']; ?></td>
          <td style="text-align: center;"><button type="button" style="width: 70px;" class="btn btn-success" data-toggle="modal" data-target="#modalUbahAdmin<?php echo $row['id_admin']; ?>">Edit</button></td>
          <td style="text-align: center;"><button type="button" style="width: 70px;" class="btn btn-danger" data-toggle="modal" data-target="#modalHapusAdmin<?php echo $row['id_admin']; ?>">Hapus</button></td>
        </tr>

      <?php include("updateadmin.php"); ?>
      <?php include("deleteadmin.php"); ?>

    <?php
  }
?>
  </tbody>
</table>