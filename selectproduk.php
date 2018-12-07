<?php
  $queryselect = " SELECT *FROM produk INNER JOIN kategori ON produk.id_kategori=kategori.id_kategori";
  $resultselect = mysqli_query($con, $queryselect);
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID PRODUK</th>
      <th scope="col">NAMA</th>
      <!--<th scope="col">GAMBAR</th>-->
      <th scope="col">KATEGORI</th>
      <!--<th scope="col">DESKRIPSI</th>-->
      <th scope="col">TANGGAL</th>
      <th scope="col">STOK</th>
      <th scope="col">HARGA</th>
      <th scope="col" colspan="2" style="text-align: center">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($row = mysqli_fetch_array($resultselect)){
    ?>
        <tr>
          <td><?php echo $row['id_produk']; ?></td>
          <td><?php echo $row['nama_produk']; ?></td>
          <!--<td><img src="foto_produk/<?php echo $row['nama_file'] ?>" height="100px" width="100px"></td>-->
          <td><?php echo $row['kategori']; ?></td>
          <!--<td><?php echo $row['deskripsi']; ?></td>-->
          <td><?php echo $row['tanggal']; ?></td>
          <td><?php echo $row['stok']; ?></td>
          <td><?php echo $row['harga']; ?></td>
          <td style="text-align: center;"><button type="button" style="width: 70px;" class="btn btn-success" data-toggle="modal" data-target="#modalUbahProduk<?php echo $row['id_produk']; ?>">Edit</button></td>
          <td style="text-align: center;"><button type="button" style="width: 70px;" class="btn btn-danger" data-toggle="modal" data-target="#modalHapusProduk<?php echo $row['id_produk']; ?>">Hapus</button></td>
        </tr>

      <?php include("updateproduk.php"); ?>
      <?php include("deleteproduk.php"); ?>

    <?php
  }
?>
  </tbody>
</table>