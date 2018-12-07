<?php
  $queryselect = " SELECT *FROM artikel";
  $resultselect = mysqli_query($con, $queryselect);
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID ARTIKEL</th>
      <th scope="col">JUDUL</th>
      <th scope="col">TANGGAL</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($row = mysqli_fetch_array($resultselect)){
    ?>
        <tr>
          <td><?php echo $row['id_artikel']; ?></td>
          <td><?php echo $row['judul_artikel']; ?></td>
          <td><?php echo $row['tanggal']; ?></td>
          <td><a class="btn btn-success" href="updatepostingan.php?id=<?php echo $row['id_artikel']; ?>" role="button">Edit</a></td>
          <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalHapusArtikel<?php echo $row['id_artikel']; ?>">Hapus</button></td>
          
        </tr>

      <?php include("deletepost.php"); ?>

    <?php
  }
?>
  </tbody>
</table>