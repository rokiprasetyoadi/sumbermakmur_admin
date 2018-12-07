<?php
  $queryselect = " SELECT *FROM datamember";
  $resultselect = mysqli_query($con, $queryselect);
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAMA</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">NO. TELP</th>
      <th scope="col">E-MAIL</th>
      <th scope="col">USERNAME</th>
      <th scope="col" colspan="2" style="text-align: center;">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($row = mysqli_fetch_array($resultselect)){
    ?>
        <tr>
          <td><?php echo $row['id_member']; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['alamat']; ?></td>
          <td><?php echo $row['no_telp']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['username']; ?></td>
          <td style="text-align: center;"><button type="button" style="width: 70px;" class="btn btn-success" data-toggle="modal" data-target="#modalUbahMember<?php echo $row['id_member']; ?>">Edit</button></td>
          <td style="text-align: center;"><button type="button" style="width: 70px;" class="btn btn-danger" data-toggle="modal" data-target="#modalHapusMember<?php echo $row['id_member']; ?>">Hapus</button></td>
          
        </tr>

      <?php include("updatemember.php"); ?>
      <?php include("deletemember.php"); ?>

    <?php
  }
?>
  </tbody>
</table>