<?php 
include '../koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	//ambil data dari form
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$alamat=$_POST['alamat'];

	//buat query update
	$sql="UPDATE event SET nama='$nama', email='$email', tgl_lahir='$tgl_lahir', alamat='$alamat' WHERE id='$id'";
	$query= mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
	//apakah update berhasil
	if($query){
		//kalau berhasil, alihkan ke halaman index.php dengan status =sukses 
		header('location: index.php?status=sukses');
		}else{
			//kalau gagal, alihkan ke halaman index.php dengan status=gagal
		header('location: index.php?status=gagal');
		die("Akses dilarang...");
	}
} 
?>
