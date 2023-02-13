<?php
$koneksi =mysqli_connect("localhost","root","","db_pkl");
//cek koneksi
if (mysqli_connect_error()){
	echo "koneksi database gagal:", mysqli_connect_error();
}else{
	echo"berhasil";
}
?>