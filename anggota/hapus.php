<?php

include '../koneksi.php';
$id_anggota = $_GET["id_anggota"];

$query = "DELETE FROM anggota WHERE id_anggota = '$id_anggota' ";
$buku = mysqli_query($koneksi,$query);


	echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
	


?>