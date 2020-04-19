<?php 
$koneksi = new mysqli("localhost","root","","pesawat");
?>
<?php
$host="localhost";
$username="root";
$password="";
$database="pesawat";

$connect=mysqli_connect($host,$username,$password,$database);
if(!$connect){
    echo "koneksi ke data base gagal".mysqli_connect_error();
}
?>