<div id="label-page"><h3 style="text-align: center; margin:10px">Transaksi Peminjaman</h3></div>
<div id="content">
	<a href="index.php?p=transaksi-peminjaman-input" class="btn btn-primary">Transaksi Baru</a>
	<table id="tabel-tampil" class="table mt-2">
		<tr>
			<th id="label-tampil-no ">No</td>
			<th>ID Transaksi</th>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>ID Buku</th>
			<th>Judul Buku</th>
			<th>Tanggal Pinjam</th>
			<th id="label-opsi3">Opsi</th>
		</tr>
		<?php

		$sql="SELECT tbtransaksi.*,tbanggota.*,tbbuku.*
		FROM tbtransaksi,tbanggota,tbbuku
		WHERE tbtransaksi.idanggota=tbanggota.idanggota
		AND tbtransaksi.idbuku=tbbuku.idbuku
		AND tbtransaksi.tglkembali='0000-00-00'
		ORDER BY tbtransaksi.idtransaksi DESC";
		
		$q_transaksi = mysqli_query($db, $sql);

		$nomor=1;
		while($r_transaksi=mysqli_fetch_array($q_transaksi)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_transaksi['idtransaksi']; ?></td>
			<td><?php echo $r_transaksi['idanggota']; ?></td>
			<td><?php echo $r_transaksi['nama']; ?></td>
			<td><?php echo $r_transaksi['idbuku']; ?></td>
			<td><?php echo $r_transaksi['judulbuku']; ?></td>
			<td><?php echo $r_transaksi['tglpinjam']; ?></td>
			<td>
				<a href="cetak/nota-pinjam.php?&id=<?php echo $r_transaksi['idtransaksi'];?>" target="_blank" class="btn btn-success">Cetak Nota</a></div>
				<a onclick="return confirm('Yakin ingin menghapus data ?')" href="proses/pengembalian-proses.php?&id=<?php echo $r_transaksi['idtransaksi'];?>" class="btn btn-warning">Pengembalian</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>