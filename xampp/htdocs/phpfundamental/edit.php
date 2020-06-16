<?php
include_once("koneksi.php");

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	
	$result = mysqli_query($connect, "UPDATE user SET nama='$nama', alamat='$alamat' WHERE id=$id");
	
	header("Location: view.php");
}
?>
<?php
$id = $_GET['id_user'];

$result = mysqli_query($connect, "SELECT * FROM user WHERE id=$id");

while($user_data = 	mysqli_fetch_array($result))
{
	$nama = $user_data['nama'];
	$alamat = $user_data['alamat'];	
}
?>
<html>
<head>
	<title> Edit data user</title>
</head>
</html>

<body>
	<a href="view.php">Home</a>
	<br/><br/>
	
	<form name="update_user> 
	
	
	
	