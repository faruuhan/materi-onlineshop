<?php

include "koneksi.php";

$produkId = $_POST['id'];
$nama_produk = $_POST['namaproduk'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];

$query = "UPDATE produk SET nama_produk='$nama_produk', harga=$harga, qty=$qty WHERE produkId='$produkId'";

mysql_query($query);

header("Location:../index.php?mod=produk_list");