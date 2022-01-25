<?php

include "koneksi.php";

$produkId = $_GET['id'];

$query = "DELETE FROM produk WHERE produkId='$produkId'";

mysql_query($query);

header("Location:../index.php?mod=produk_list");