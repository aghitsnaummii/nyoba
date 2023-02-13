<?php
session_start();
include 'koneksi.php' ;

$username =$_POST['username'];
$password =$_POST['password'];

$login = mysqli_query($koneksi,"select * from user where username = '$username' and password = '$password'");
$cek = mysqli_num_rows($login);
if ($cek > 0){
	$data = mysqli_fetch_assoc($login);

	//cek jika user login sebagai user

	if ($data['level']=="user"){

		//buat session login dan username
		//$_session['username'] = $username;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['level'] = "user";
		//alihkan ke halaman dashboard user
		header("location:admin/index.php");
	}else if ($data['level']=="admin"){

		//buat session login dan username
		//$_session['username'] = $username;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['level'] = "user";
		//alihkan ke halaman dashboard user
		header("location:admin/index.php");
	}else{
		header("location:index.php");
	}
}
?>