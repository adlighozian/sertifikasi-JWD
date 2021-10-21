<div id="label-page">
	<h3 style="text-align: center; margin:10px 0">Input Data Anggota</h3>
</div>

<?php 

$query = mysqli_query($db, "SELECT max(idanggota) as kodeTerbesar FROM tbanggota");
$data = mysqli_fetch_array($query);
$kodeid = $data['kodeTerbesar'];

$urutan = (int) substr($kodeid, 3, 3);

$urutan++;

$huruf = "AG";
$kodeid = $huruf . sprintf("%03s", $urutan);

?>

<div class="content">
	<form action="proses/anggota-input-proses.php" method="post">
		<div class="form-floating mb-3">
			<input readonly type="text" value="<?= $kodeid;?>" name="id_anggota" class="form-control" id="floatingInputValue" placeholder="name@example.com" required>
			<label for="floatingInputValue">ID Anggota</label>
		</div>

		<div class="form-floating mb-3">
			<input type="text" name="nama" class="form-control" id="floatingInputValue" placeholder="name@example.com" required>
			<label for="floatingInputValue">Nama</label>
		</div>

		<div class="col-md mb-3">
			<div class="form-floating">
				<select name="jenis_kelamin" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" required>
					<option value="" selected hidden>pilih...</option>
					<option value="Pria">Pria</option>
					<option value="Wanita">Wanita</option>
				</select>
				<label for="floatingSelectGrid">Jenis Kelamin</label>
			</div>
		</div>

		<div class="form-floating mb-3">
			<textarea class="form-control" name="alamat" id="floatingTextarea2" style="height: 100px" required></textarea>
			<label for="floatingTextarea2">Alamat</label>
		</div>
		
		<div class="col-12">
			<button class="btn btn-primary" name="simpan" type="submit">Submit form</button>
		</div>
	</form>
</div>
