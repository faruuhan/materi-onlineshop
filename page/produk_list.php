<?php include "proses/koneksi.php"; ?>
 <table class="table table-bordered">
    <thead>
	<tr>
		<th>No</th>
		<th>Gambar</th>
		<th>Nama</th>
		<th>Harga</th>
		<th>Stok</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
<?php 
	$query = "SELECT * FROM produk";
	$res = mysql_query($query);
	$no =1;
	while($row=mysql_fetch_array($res)){
?>		
	<tr>
		<td><?php echo $no; ?></td>
		<td><img src="<?php echo $row['gambar']; ?>" width="80"></td>
		<td><?php echo $row['nama_produk']; ?></td>
		<td><?php echo $row['harga']; ?></td>
		<td><?php echo $row['qty']; ?></td>
		<td><a href="index.php?mod=produk_form&id=<?php echo $row['produkId']; ?>">Edit</a> | <a onClick ="return confirm ('Yakin data ingin di hapus ?');" href="proses/produk_delete.php?id=<?php echo $row['produkId']; ?>">Delete</a></td>
	</tr>
<?php $no++; } ?>
	</tbody>
  </table>