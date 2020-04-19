<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Welcome</title>
</head>
<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-light bg-light" id="mainNav">
<div class="container">
  <a class="navbar-brand text-primary Bolder than the inherited font weight." href="#">PESAWAT.LINE</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-primary Bolder than the inherited font weight." href="indexx.php">Beranda <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link text-primary Bolder than the inherited font weight." href="info_user.php">Tiket <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-primary Bolder than the inherited font weight." href="longout.php">Longout <span class="sr-only">(current)</span></a>
      </li>
    
    </ul>
  </div>
  </div>
</nav>

  
                        <center>
                            <br>
                            <h1>DATA AKUN USER</h1>
                            <div style="margin-top:30px;margin-left:80px;margin-right:80px;text-align:center;box-shadow: 0 0 10px gray;" >
                                <table class="table table-striped" width="" cellpadding="" >
                                <thead>
                                    <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">USERNAME</th>
                                    <th scope="col">PASSWORD</th>
                                   <th scope="col" colspan="2">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "kon.php";
                                    $no = 1;
                                    $query = "SELECT * FROM kereta";
                                    $sql = mysqli_query($connect,$query);
                                    while($data = mysqli_fetch_array($sql)){
                                      echo "<tr>";
                                        echo "<td>".$no++."</td>";
                                        echo "<td>".$data['Username']."</td>";
                                        echo "<td>".$data['Password']."</td>";
                                        echo "<td><a href='update.php?ID=$data[ID]'>Edit</a> | <a href='del.php?ID=$data[ID]'>Delete</a></td></tr>";        
                                       echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            </div>
                        </center>
                        <style>body{
    background: url(af.jpg);
    color: #fff;
}

</style>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>