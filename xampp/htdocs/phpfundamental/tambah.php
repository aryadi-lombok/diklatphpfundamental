<html>
<head>
	<title> Tambah user </title>
</head>

<body>
	<a href="view.php"> Lihat data user </a>
	<br/><br/>
	<form action="tambah.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>	
		</table>
	</form>	
	
	<?php
	
	if(isset($_POST['submit'])) {
		$nama = strtoupper ($_POST['nama']);
		$alamat = strtoupper ($_POST['alamat']);
		
		include_once("koneksi.php");
		
		$result = mysqli_query($connect, "INSERT INTO user(nama,alamat) VALUES('$nama','$alamat')");
		echo "User berhasil ditambahkan. <a href='view.php'> View Users </a>";
	}
	?>
</body>