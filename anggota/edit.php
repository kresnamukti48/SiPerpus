<?php

include '../koneksi.php';
include '../aset/header.php';
include '../aset/footer.php';


$id_anggota = $_GET["id_anggota"];

$query = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_anggota = '$id_anggota'");
$anggota = mysqli_fetch_assoc($query);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.field-icon {
  float: right;
  margin-right: -25px;
  margin-top: -25px;
 
}

.container{
  padding-top:50px;
  margin: auto;
}
	</style>
</head>


<body>


<div class="container">
	<div class ="row mt-4">
		<div class="col-md">
			<center>
			<div class="card" style="width: 100%;">
				<div class="card-header" style="width:100%;">
					<h2 class="card-tittle"><i class="fad fa-user-edit"></i>Edit Data Anggota</h2>
				</div>
				<div class="card-body">
					<form class="form-horizontal" method="post" action="edit-proses.php">

						<input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota']; ?>">

          			<div class="form-group">
            			<label class="col-md-4 control-label">Nama</label>
            		<div class="col-md-6">
              			<input type="text" class="form-control" name="nama" value="<?= $anggota['nama'] ?>">
            	</div>
          	</div>

          	          <div class="form-group">
            			<label class="col-md-4 control-label">Kelas</label>
            		<div class="col-md-6">
              			<input type="text" class="form-control" name="kelas" value="<?= $anggota['kelas'] ?>">
            	</div>
          	</div>

          			<div class="form-group">
            			<label class="col-md-4 control-label">Nomor Telepon</label>
            		<div class="col-md-6">
              			<input type="int" class="form-control" name="telp" value="<?= $anggota['telp'] ?>">
            	</div>
          	</div>

          			<div class="form-group">
            			<label class="col-md-4 control-label">Username</label>
            		<div class="col-md-6">
              			<input type="text" class="form-control" name="username" value="<?= $anggota['username'] ?>">
            	</div>
          	</div>

          			<div class="form-group">
            			<label class="col-md-4 control-label">Password</label>
            		<div class="col-md-6">
             			 <input id="password-field" type="password" class="form-control" name="password" value="<?= $anggota['password'] ?>">
              		<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            	</div>
          	</div>


 						<button type="submit" name="simpan" class="btn  btn-primary">Simpan</button>

        </form>
				
				</div>
			</div>
		</div>
	</div>
</div>	
			</center>

	<script type="text/javascript">
		$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
	</script>
</body>
</html>



