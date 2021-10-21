<?php
$id_anggota = $_GET['id'];
$q_tampil_anggota = mysqli_query($db, "SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
$r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota);
?>
<div id="label-page">
	<h3 style="text-align: center;margin:10px 0">Edit Data Anggota</h3>
</div>

<div class="content">
	<form action="proses/anggota-edit-proses.php" method="POST">
		<div class="form-floating mb-3">
			<input type="text" name="id_anggota" class="form-control" id="floatingInputValue" value="<?php echo $r_tampil_anggota['idanggota']; ?>" readonly>
			<label for="floatingInputValue">ID Anggota</label>
		</div>

		<div class="form-floating mb-3">
			<input type="text" name="nama" class="form-control" id="floatingInputValue" value="<?php echo $r_tampil_anggota['nama']; ?>" readonly>
			<label for="floatingInputValue">Nama</label>
		</div>

		<div class="form-floating mb-3">
			<input type="text" name="name" value="<?php echo $r_tampil_anggota['nama']; ?>" class="form-control" id="floatingInputValue" placeholder="name@example.com">
			<label for="floatingInputValue">Rename</label>
		</div>

		<div class="col-md mb-3">
			<div class="form-floating">
				<select name="jenis_kelamin" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
					<option value="<?php echo $r_tampil_anggota['jeniskelamin']; ?>" selected hidden><?php echo $r_tampil_anggota['jeniskelamin']; ?></option>
					<option value="Pria">Pria</option>
					<option value="Wanita">Wanita</option>
				</select>
				<label for="floatingSelectGrid">Jenis Kelamin</label>
			</div>
		</div>

		<div class="form-floating mb-3">
			<textarea class="form-control" name="alamat" id="floatingTextarea2" style="height: 100px"><?php echo $r_tampil_anggota['alamat']; ?></textarea>
			<label for="floatingTextarea2">Alamat</label>
		</div>

		<div class="col-12">
			<button  class="btn btn-primary" type="submit" name="simpan" value="Simpan">Submit form</button>
		</div>
	</form>
</div>