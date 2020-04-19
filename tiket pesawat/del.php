<?php
    include "kon.php";
    $ID = $_GET['ID'];

$query="DELETE FROM kereta WHERE ID='$ID'";
$sql = mysqli_connect('localhost', 'root', '', 'tiket');

if (mysqli_query($sql, $query) ) {
    echo "berhasil tersimpan";
    header("location:info_user.php");
  }else{
    echo "agal tersimpan".$query."<br>".mysqli_error($connect);
  }
?>