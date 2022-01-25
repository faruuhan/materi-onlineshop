<?php

if (isset($_POST['setting'])){
	$produkId 	= $_POST['idproduk'];
	$namaprod 	= $_POST['namaproduk'];
	$hargaprod	= $_POST['harga'];
	$gambarprod	= $_POST['gambarproduk'];
}
?>

<html>
<body>

<table border="0" align="center">

<form method ="POST" action="barang.php">
<tr>
	<td>Produk ID</td>
	<td>Nama Produk</td>
	<td>Harga</td>
	<td>Gambar</td>
</tr>
<tr>
<td><input type ="text" name="idproduk" value=""></td>
<td><input type ="text" name="namaproduk" value=""></td>
<td><input type ="text" name="harga" value=""></td>
<td><input type ="file" id="avatar" name="gambarproduk" accept="image/jpeg, image/png"/></td>
</tr>
<tr>
<td colspan="4" align="center"><input type ="submit" name="setting" value="Proses"></td>
</tr>
</table>

</form>