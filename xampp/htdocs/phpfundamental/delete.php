<?php
include_once("koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($connect, "DELETE FROM user WHERE id=$id");
