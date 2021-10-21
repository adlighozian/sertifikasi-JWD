<div id="label-page">
	<h3 style="text-align: center; margin:20px">Input Data Buku</h3>
</div>

<!-- <form action="proses/buku-input-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><input type="text" name="id_buku" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Judul Buku</td>
			<td class="isian-formulir"><input type="text" name="judul_buku" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Kategori</td>
			<td class="isian-formulir">
				<select name="kategori" class="isian-formulir isian-formulir-border">
					<option value="" select="selected">~ Pilih Kategori ~</option>
					<option value="Ilmu Komputer">Ilmu Komputer</option>
					<option value="Ilmu Agama">Ilmu Agama</option>
					<option value="Karya Sastra">Karya Sastra</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Pengarang</td>
			<td class="isian-formulir"><input type="text" name="pengarang" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Penerbit</td>
			<td class="isian-formulir"><input type="text" name="penerbit" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
</form> -->

<?php 

$query = mysqli_query($db, "SELECT max(idbuku) as kodeTerbesar FROM tbbuku");
$data = mysqli_fetch_array($query);
$kodeid = $data['kodeTerbesar'];

$urutan = (int) substr($kodeid, 3, 3);

$urutan++;

$huruf = "BK";
$kodeid = $huruf . sprintf("%03s", $urutan);

?>

<div class="content">
	<form action="proses/buku-input-proses.php" method="post">
		<div class="form-floating mb-3">
			<input readonly value="<?= $kodeid;?>" type="text" name="id_buku" class="form-control" id="floatingInputValue" placeholder="name@example.com" required>
			<label for="floatingInputValue">ID Buku</label>
		</div>

		<div class="form-floating mb-3">
			<input type="text" name="judul_buku" class="form-control" id="floatingInputValue" placeholder="name@example.com" required>
			<label for="floatingInputValue">Judul Buku</label>
		</div>

		<div class="col-md mb-3">
			<div class="form-floating">
				<select name="kategori" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" required>
					<option value="" selected hidden>pilih...</option>
					<option value="Ilmu Komputer">Ilmu Komputer</option>
					<option value="Ilmu Agama">Ilmu Agama</option>
					<option value="Karya Sastra">Karya Sastra</option>
				</select>
				<label for="floatingSelectGrid">Kategori</label>
			</div>
		</div>

		<div class="form-floating mb-3">
			<input type="text" name="pengarang" class="form-control" id="floatingInputValue" placeholder="name@example.com" required>
			<label for="floatingInputValue">Pengarang</label>
		</div>

		<div class="form-floating mb-3">
			<input type="text" name="penerbit" class="form-control" id="floatingInputValue" placeholder="name@example.com" required>
			<label for="floatingInputValue">Penerbit</label>
		</div>

		<div class="col-12">
			<button class="btn btn-primary" name="simpan" type="submit">Submit form</button>
		</div>
	</form>
</div>