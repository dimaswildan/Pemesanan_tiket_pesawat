<?php
if (isset($_POST['submit'])) {
include "kon.php";
    $ID=$_POST['ID'];
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
  
    mysqli_query($connect,"UPDATE kereta SET Username='$Username', Password='$Password'  where ID='$ID' ");

        header("location:info_user.php");

    }else{
        echo"gk mencet submit";
        }
?>