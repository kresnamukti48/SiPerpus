<?php

include '../koneksi.php';
$id_buku = $_GET["id_buku"];

$query = "DELETE FROM buku WHERE id_buku = '$id_buku' ";
$buku = mysqli_query($koneksi,$query);


	echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
	


?>