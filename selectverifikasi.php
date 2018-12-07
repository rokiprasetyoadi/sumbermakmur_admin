<?php
  $queryselect = " SELECT *FROM verifikasi";
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
      <th scope="col">BUKTI TRANSFER</th>
      <th scope="col" colspan="2" style="text-align: center;">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($row = mysqli_fetch_array($resultselect)){
    ?>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><img src="foto_trfbank/<?php echo $row['foto_transferbank'] ?>" height="100px" width="100px"></td>
          <td style="text-align: center;"><button type="button" style="width: 70px;" class="btn btn-danger" data-toggle="modal" data-target="#modalHapustrf<?php echo $row['id_verifikasi']; ?>">Hapus</button></td>
          
        </tr>

    <?php
  }
?>
  </tbody>
</table>