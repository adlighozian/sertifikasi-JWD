<?php
include'../koneksi.php';
$id_anggota=$_POST['id_anggota'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$status="Tidak Meminjam";
	
if(isset($_POST['simpan'])){

	$sql = 
	"INSERT INTO tbanggota
		VALUES('$id_anggota','$nama','$jenis_kelamin','$alamat','$status')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=anggota");
}
?>