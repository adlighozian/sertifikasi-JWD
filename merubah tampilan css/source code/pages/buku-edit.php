<?php
$id_buku = $_GET['id'];
$q_tampil_buku = mysqli_query($db, "SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
$r_tampil_buku = mysqli_fetch_array($q_tampil_buku);

?>
<div id="label-page">
	<h3 style="text-align: center; margin:10px">Edit Data Buku</h3>
</div>

<div class="content">
	<form action="proses/buku-edit-proses.php" method="post">
		<div class="form-floating mb-3">
			<input type="text" name="id_buku" class="form-control" value="<?php echo $r_tampil_buku['idbuku']; ?>" id="floatingInputValue" placeholder="name@example.com" readonly required>
			<label for="floatingInputValue">ID Buku</label>
		</div>

		<div class="form-floating mb-3">
			<input type="text" name="judul_buku" class="form-control" value="<?php echo $r_tampil_buku['judulbuku']; ?>" id="floatingInputValue" placeholder="name@example.com" required>
			<label for="floatingInputValue">Judul Buku</label>
		</div>

		<div class="col-md mb-3">
			<div class="form-floating">
				<select name="kategori" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
					<option value="<?php echo $r_tampil_buku['kategori']; ?>" selected hidden><?php echo $r_tampil_buku['kategori']; ?></option>
					<option value="Ilmu Komputer">Ilmu Komputer</option>
					<option value="Ilmu Agama">Ilmu Agama</option>
					<option value="Karya Sastra">Karya Sastra</option>
				</select>
				<label for="floatingSelectGrid">Kategori</label>
			</div>
		</div>

		<div class="form-floating mb-3">
			<input type="text" name="pengarang" class="form-control" value="<?php echo $r_tampil_buku['pengarang']; ?>" id="floatingInputValue" placeholder="name@example.com" required>
			<label for="floatingInputValue">Pengarang</label>
		</div>

		<div class="form-floating mb-3">
			<input type="text" name="penerbit" class="form-control" value="<?php echo $r_tampil_buku['penerbit']; ?>" id="floatingInputValue" placeholder="name@example.com" required>
			<label for="floatingInputValue">Penerbit</label>
		</div>

		<div class="col-12">
			<button class="btn btn-primary" name="simpan" type="submit">Submit form</button>
		</div>
	</form>
</div>