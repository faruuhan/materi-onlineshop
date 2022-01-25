<html>
<body>
<?php
	$id = "";
	$nama_produk="";
	$harga="";
	$qty="";
	$action="proses/produk_add.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		include"proses/koneksi.php";
		$query = "select * from produk where produkId ='".$id."'";
		$row = mysql_query($query);
		$res = mysql_fetch_array($row);
		$nama_produk = $res['nama_produk'];
		$harga = $res['harga'];
		$qty = $res['qty'];
		$action ="proses/produk_update.php";
	
	}
?>

<form method ="POST" action="<?php echo $action; ?>" enctype="multipart/form-data">

<input type ="hidden" value ="<?php echo $id; ?>" name="id">

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Nama Produk</span>
  </div>
<input class="form-control" type ="text" name="namaproduk" value="<?php echo $nama_produk; ?>">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Harga</span>
  </div>
<input class="form-control" type ="number" name="harga" value="<?php echo $harga; ?>">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Qty</span>
  </div>
<input class="form-control" type ="number" name="qty" value="<?php echo $qty; ?>">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Gambar</span>
  </div>
  <div class="custom-file">
<input class="custom-file-input" type ="file" id="inputGroupFile01" name="gambar">
 <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
	</div>
</div>

<input type ="submit" name="submit" value="Simpan" class="btn btn-primary">


</form>
</body>
</html>