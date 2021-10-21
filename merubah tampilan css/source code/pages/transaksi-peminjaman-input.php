<div id="label-page">
	<h3 style="text-align: center;margin: 10px">Input Transaksi Peminjaman</h3>
</div>

<!-- <form action="proses/transaksi-peminjaman-input-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Transaksi</td>
			<td class="isian-formulir"><input type="text" name="id_transaksi" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Anggota</td>
			<td class="isian-formulir">
				<select name="id_anggota" class="isian-formulir isian-formulir-border">
					<option value="" select="selected"> Pilih Data Anggota </option>
					<?php
					$q_tampil_anggota = mysqli_query(
						$db,
						"SELECT * FROM tbanggota
							WHERE status='Tidak Meminjam'
							ORDER BY idanggota"
					);
					while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
						echo "<option value=$r_tampil_anggota[idanggota]>$r_tampil_anggota[idanggota] | $r_tampil_anggota[nama]</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Buku</td>
			<td class="isian-formulir">
				<select name="id_buku" class="isian-formulir isian-formulir-border">
					<option value="" select="selected"> Pilih Data Buku </option>
					<?php
					$q_tampil_buku = mysqli_query(
						$db,
						"SELECT * FROM tbbuku
							WHERE status='Tersedia'
							ORDER BY idbuku"
					);
					while ($r_tampil_buku = mysqli_fetch_array($q_tampil_buku)) {
						echo "<option value=$r_tampil_buku[idbuku]>$r_tampil_buku[idbuku] | $r_tampil_buku[judulbuku]</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Pinjam</td>
			<td class="isian-formulir"><input type="text" name="tgl_pinjam" value="<?php echo $tgl; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
</form> -->

<?php 

$query = mysqli_query($db, "SELECT max(idtransaksi) as kodeTerbesar FROM tbtransaksi");
$data = mysqli_fetch_array($query);
$kodeid = $data['kodeTerbesar'];

$urutan = (int) substr($kodeid, 3, 3);

$urutan++;

$huruf = "TR";
$kodeid = $huruf . sprintf("%03s", $urutan);

?>

<div class="content">
	<form action="proses/transaksi-peminjaman-input-proses.php" method="post">
		<div class="form-floating mb-3">
			<input readonly value="<?= $kodeid ?>" type="text" name="id_transaksi" class="form-control" id="floatingInputValue" placeholder="name@example.com" required>
			<label for="floatingInputValue">ID Transaksi</label>
		</div>

		<div class="col-md mb-3">
			<div class="form-floating">
				<select name="id_anggota" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" required>
					<option value="" selected hidden> Pilih Data Anggota </option>
					<?php
					$q_tampil_anggota = mysqli_query(
						$db,
						"SELECT * FROM tbanggota
							WHERE status='Tidak Meminjam'
							ORDER BY idanggota"
					);
					while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
						echo "<option value=$r_tampil_anggota[idanggota]>$r_tampil_anggota[idanggota] | $r_tampil_anggota[nama]</option>";
					}
					?>
				</select>
				<label for="floatingSelectGrid">Anggota</label>
			</div>
		</div>

		<div class="col-md mb-3">
			<div class="form-floating">
				<select name="id_buku" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" required>
					<option value="" selected hidden>pilih Data Buku</option>
					<?php
					$q_tampil_buku = mysqli_query(
						$db,
						"SELECT * FROM tbbuku
							WHERE status='Tersedia'
							ORDER BY idbuku"
					);
					while ($r_tampil_buku = mysqli_fetch_array($q_tampil_buku)) {
						echo "<option value=$r_tampil_buku[idbuku]>$r_tampil_buku[idbuku] | $r_tampil_buku[judulbuku]</option>";
					}
					?>
				</select>
				<label for="floatingSelectGrid">Buku</label>
			</div>
		</div>

		<div class="form-floating mb-3">
			<input type="date" name="tgl_pinjam" class="form-control" id="floatingInputValue" placeholder="name@example.com" required>
			<label for="floatingInputValue">Tanggal Pinjam</label>
		</div>

		<div class="col-12">
			<button class="btn btn-primary" name="simpan" type="submit">Submit form</button>
		</div>
	</form>
</div>