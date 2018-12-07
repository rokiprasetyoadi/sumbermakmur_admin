<?php
  $queryselect = " SELECT *FROM kategori";
  $resultselect = mysqli_query($con, $queryselect);
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID KATEGORI</th>
      <th scope="col">KATEGORI</th>
      <th scope="col" style="text-align: center">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($row = mysqli_fetch_array($resultselect)){
    ?>
        <tr>
          <td><?php echo $row['id_kategori']; ?></td>
          <td><?php echo $row['kategori']; ?></td>
          <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalUbahKategori<?php echo $row['id_kategori']; ?>">Edit</button></td>
          <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalHapusKategori<?php echo $row['id_kategori']; ?>">Hapus</button></td>
          
        </tr>

      <?php include("updatekategori.php"); ?>
      <?php include("deletekategori.php"); ?>

    <?php
  }
?>
  </tbody>
</table>