<div id="label-page"><h3 style="text-align: center; margin:30px 0">Tampil Data Anggota</h3></div>
<div id="content">
<a class="btn btn-primary" href="index.php?p=anggota-input">Tambah Anggota</a>

	<table id="tabel-tampil" class="table mt-2" >
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		

		
		<?php
		$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC";
		$q_tampil_anggota = mysqli_query($db, $sql);
		$nomor=1;
		while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
			
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_anggota['idanggota']; ?></td>
			<td><?php echo $r_tampil_anggota['nama']; ?></td>
			<td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
			<td><?php echo $r_tampil_anggota['alamat']; ?></td>
			<td>

				<a href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['idanggota'];?>" class="btn btn-warning">Edit</a>
				<!-- <a onclick="runPopup()" href="proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>" class="btn btn-danger">Hapus</a></div> -->
				<a onclick="return confirm('Yakin ingin menghapus data ?')" href="proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>

