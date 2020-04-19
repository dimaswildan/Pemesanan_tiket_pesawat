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
            <a class="nav-link text-primary Bolder than the inherited font weight." href="home.php">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-primary Bolder than the inherited font weight." href="booking.php">Booking <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-primary Bolder than the inherited font weight." href="tiket.php">Tiket <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-primary Bolder than the inherited font weight." href="longout.php">loungout <span class="sr-only">(current)</span></a>
          </li>
        
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/tiket%20pesawat/login%20admin.php">Login</a>
        
      </li>
          </li>
        </ul>
      </div>
      </div>
    </nav>
                            <center>
                            <br>
                            <h1>TIKET ANDA</h1>
                            <div style="margin-top:50px;">
                                <table class="table-striped table-dark" width="80%" cellpadding="10" >
                                    <thead>
                                        <tr>
                                        <th scope="col">BANDARA ASAL</th>
                                        <th scope="col">BANDARA tujuan</th>
                                        <th scope="col">TANGGAL BERANGKAT</th>
                                        <th scope="col">PENUMPANG</th>
                                        <th scope="col">PESAWAT</th>
                                        <th scope="col">JAM BERANGKAT</th>
                                        <th scope="col">PEMBATALAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "koneksi1.php";
                                        $query = "SELECT * FROM tiket";
                                        $sql = mysqli_query($connect,$query);
                                        while($data = mysqli_fetch_array($sql)){
                                            echo "<tr>";
                                            echo "<td>".$data['bandara_asal']."</td>";
                                            echo "<td>".$data['bandara_tujuan']."</td>";
                                            echo "<td>".$data['tanggal_berangkat']."</td>";
                                            echo "<td>".$data['penumpang']."</td>";
                                            echo "<td>".$data['pesawat']."</td>";
                                            echo "<td>".$data['jam']."</td>";
                                            echo "<td><a href='delete.php?id_tiket=$data[id_tiket]'>Delete</a></td></tr>";        
                                         echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                </div>
                            </center>

        </body>
        <style>body{
    background: url(af.jpg);
    color: #fff;
}

</style>
    </html>
