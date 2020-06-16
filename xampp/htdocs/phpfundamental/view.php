<?php
include_once("koneksi.php");

$result = mysqli_query($connect, "SELECT * FROM user");
?>
<html>
<head>
	<title>Homepage</title>
</head>
<body>
	<table width='80%' border='1'>
		<tr>
			<td>Nomor urut</td>
			<td>ID</td>
			<td>NAMA</td>
			<td>ALAMAT</td>
			<td>AKSI</td>
		</tr>
	<?php
		$no = 1;
		while($user_data = mysqli_fetch_array ($result)) {
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$user_data['id']."</td>";
			echo "<td>".$user_data['nama']."</td>";
			echo "<td>".$user_data['alamat']."</td>";
			echo "<td> <a href='edit.php?id_user=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a>
			</td>";
			echo "<tr>";
		}
	?>
	</table>

	<a href="tambah.php">Tambah Data</a>
</body>	
</html>	