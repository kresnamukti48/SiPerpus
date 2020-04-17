<?php

include '../koneksi.php';
include '../aset/header.php';
include '../aset/footer.php';

$id_buku = $_GET["id_buku"];

$query = mysqli_query($koneksi, "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE id_buku = '$id_buku'");
$buku = mysqli_fetch_assoc($query);



?>

<div class="container">
	<div class ="row mt-4">
		<div class="col-md">
			<center>
			<div class="card" style="width: 100%;">
				<div class="card-header" style="width:100%;">
					<h2 class="card-tittle"><i class="fas fas fa-book"> </i>Edit Data Buku</h2>
				</div>
				<div class="card-body">

				<form action="edit-proses.php" method="post">

				<table class="table">
					<input type="hidden" name="id_buku" value="<?= $buku['id_buku']; ?>">
					<tr>
						<td>Judul Buku</td>
						<td><input style="width: 100%" type="text" name="judul" value="<?= $buku['judul']; ?>" required></td>
					</tr>
					<tr>
						<td>Penerbit</td>
						<td><input  style="width: 100%" type="text" name="penerbit" value="<?= $buku['penerbit']; ?>" required></td>
					</tr>
					<tr>
						<td>Pengarang</td>
						<td><input style="width: 100%" type="text" name="pengarang" value="<?= $buku['pengarang']; ?>" required></td>
					</tr>
					<tr>
						<td>Ringkasan</td>
						<td>
							<textarea style="width: 100%; height: 100px;" name="ringkasan" value="<?= $buku['judul']; ?>" type="textarea" required><?= $buku['ringkasan']; ?></textarea>
						</td>
					</tr>
					<input style="width: 100%" type="hidden" name="cover" value="<?= $buku['cover']; ?>">
					<tr>
						<td>Stok</td>
						<td><input style="width: 100%" type="number" name="stok" value="<?= $buku['stok']; ?>" required></td>
					</tr>
					<tr>
						<td>Kategori</td>
						<td>
							<select style="width: 100%" name="id_kategori">
								

								<?php

									$query = mysqli_query($koneksi,"SELECT * FROM kategori");
									while($e = mysqli_fetch_assoc($query)):

								?>

								<option value="<?= $e['id_kategori']; ?>"><?= $e['kategori']; ?></option>

								<?php
									endwhile;
								?>
							</select>
						</td>
					</tr>
					<tr>
						<th></th>
						<th><input type="submit" class="btn btn-primary" name="simpan" value="Simpan"></th>
					</tr>

				</table>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>	
			</center>
</body>
</html>



