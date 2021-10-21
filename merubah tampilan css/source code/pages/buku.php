<div id="label-page"><h3 style="text-align: center; margin:20px 0">Tampil Data Buku</h3></div>
<div id="content">
	<a href="index.php?p=buku-input" class="btn btn-primary">Tambah Data Buku</a>
	<table id="tabel-tampil" class="table mt-2">
		<tr>
			<th id="label-tampil-no" >No</td>
			<th>ID Buku</th>
			<th>Judul Buku</th>
			<th>Kategori</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th id="label-opsi2">Opsi</th>
		</tr>
		<?php

		$sql="SELECT * FROM tbbuku ORDER BY idbuku DESC";
		$q_tampil_buku = mysqli_query($db, $sql);

		$nomor=1;
		while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_buku['idbuku']; ?></td>
			<td><?php echo $r_tampil_buku['judulbuku']; ?></td>
			<td><?php echo $r_tampil_buku['kategori']; ?></td>
			<td><?php echo $r_tampil_buku['pengarang']; ?></td>
			<td><?php echo $r_tampil_buku['penerbit']; ?></td>
			<td>
				<a href="index.php?p=buku-edit&id=<?php echo $r_tampil_buku['idbuku'];?>" class="btn btn-warning">Edit</a></div>
				<a onclick="return confirm('Yakin ingin menghapus data ?')" href="proses/buku-hapus.php?id=<?php echo $r_tampil_buku['idbuku']; ?>" class="btn btn-danger">Hapus</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>