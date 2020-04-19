<?php

    include "./koneksi.php";

    $bandara_asal = $_POST['bandara_asal'];
    $bandara_tujuan = $_POST['bandara_tujuan'];
    $tanggal_berangkat = $_POST['tanggal_berangkat'];
    $penumpang = $_POST['penumpang'];
    $pesawat = $_POST['pesawat'];
    $jam = $_POST['jam'];
    
    $query = "INSERT INTO tiket ( bandara_asal, bandara_tujuan, tanggal_berangkat, penumpang, pesawat, jam) VALUES ('$bandara_asal', '$bandara_tujuan', '$tanggal_berangkat','$penumpang','$pesawat','$jam')";
    
    $sql = mysqli_connect('localhost', 'root', '', 'pesawat');

    if ( mysqli_query($sql, $query) ) {
      echo "Berhasil tambah data";
      header("Location: tiket.php");
    }else{
      echo "gagal tambah data".$query."<br>".mysqli_error($connect);
    }
?>