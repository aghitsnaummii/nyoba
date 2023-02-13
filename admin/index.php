<?php include ('koneksi.php'); ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="styleindex2.css">	
<body>
	<center><h1>Daftar Peserta</h2></center>
	<center><nav><a href="v_from.php"><button>Tambah Baru</button>
	</a></nav></center>
	<br>
	<table border="1" cellpadding="8" align="center" bgcolor="white">
	<thread>
    <tr>
    	<th>Id</th>
    	<th>Nama</th>
    	<th>Email</th>
    	<th>Tanggal Lahir</th>
    	<th>Alamat</th>
    	<th>Tindakan</th>
    </tr>
</thread>
<body>
<?php 
   $sql = "SELECT * FROM event";
   $query = mysqli_query($koneksi,$sql);
   while ($event =  mysqli_fetch_array($query)){
   	echo "<tr>";

 		echo "<td>" . $event ['id'] . "</td>";
   	echo "<td>" . $event ['nama'] . "</td>";
   	echo "<td>" . $event ['email'] . "</td>";
   	echo "<td>" . $event ['tgl_lahir'] . "</td>";
   	echo "<td>" . $event ['alamat'] . "</td>";
   	echo "<td>";	
   	echo "<a href = 'proses_edit.php?id =" . $event['id'] . "'>Edit</a> | ";
    	echo "<a href = 'hapus.php?id =" . $event['id'] . "'>Hapus</a> | ";
  
  }
 ?>
</body>
	</table>
	<p align="center">Total :
		<?php echo mysqli_num_rows($query) ?>
		<br>
		<center><nav><a href="/agPKL/index.php"><button>Logout</button>
		</a></nav></center>
</body>
</html>