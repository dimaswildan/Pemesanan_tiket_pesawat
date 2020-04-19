<?php
include 'kon.php';
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$ID = $_POST['ID'];

$query= "UPDATE kereta SET Username='$Username', Password='$Password' WHERE ID='$ID'";

$data = $koneksi->query($query);
$d= mysqli_affected_rows($koneksi);

echo "<a href='info_user.php'>Lihat Data</a?";
?>