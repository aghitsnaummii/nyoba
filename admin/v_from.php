<?php
include ("koneksi.php");
if (isset($_GET['id'])){
	$title ="edit";
	$url ="proses_edit.php";
	$id = $GET['id'];
    //buat query untuk ambil data dari database
    $sql ="SELECT * FROM event WHERE id = $id";
	$query = mysqli_query ($koneksi,$sql);
	$event = mysqli_fetch_assoc ($query);
	//jika data yang diedit tidak ditemukan
	if (mysqli_num_rows($query) <1){
		die("data tidak ditemukan...");}
		//url jika edit data
	}else{
		$title ="Add";
		//url jika tambah data
		$url='proses_pendaftaran.php';
	}
	?>
	<html>
	<head><title>  </title></head>
	<body>
	<header><h3 align="center"> Formulir Pendaftaran </h3></header>
	<form action ="proses_pendaftaran.php" method = "POST">
	<fieldset>
	<legend><h2>Form Peserta </h2></legend>
	<link rel="stylesheet" type="text/css" href="stylevfrom.css">
	<div>
		<label for ='id'>Id: </label><br>
	<input type ="text" name ="id" value ="<?php if (isset($_GET['id'])) 
	{echo $event['id'];}?>"/></div><div>
	<label for ='nama'>Nama: </label><br>
	<input type ="text" name ="nama" value ="<?php if (isset($_GET['id']))
	{echo $event['nama'];}?>"/>
	</div><div>
		<label for ='email'>Email: </label><br>
	<input type ="text" name ="email" value ="<?php if (isset($_GET['id'])) 
	{echo $event['email'];}?>"/>
	</div><div>
	<label for ='tgl_lahir'>Tanggal Lahir: </label><br>
	<input type ="date" name ="tgl_lahir" value ="<?php if (isset($_GET['id'])) 
	{echo $event['tgl_lahir'];}?>"/>
	</div>
	<label for ='alamat'>Alamat: </label><br>
	<input type ="text" name ="alamat" value ="<?php if (isset($_GET['id'])) 
	{echo $event['alamat'];}?>"/>
	<div>
	<input type ="submit" value ="simpan" name = "simpan" name ="simpan"/>
	</div>
	</fieldset>
	</form></body></html>