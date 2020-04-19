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
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<link type="text/css" rel="stylesheet" href="css/style.css" />

    <div class="kotak">
            <div class="pemesanan">
                <h4>PEMESANAN TIKET</h4>
            </div>
                <form action="simpan.php" method="post">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <img src="lok.png" alt="" width="32" height="32" title="bandara Asal">
                            <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Bandara asal" aria-describedby="inputGroupPrepend2" name="bandara_asal"value="<?=isset($_POST['bandara_asal']) ? $_POST['bandara_asal'] : ''?>"  required>
                              
                            
                            <img src="lok.png" alt="" width="32" height="32" title="bandara Tujuan">
                            <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Bandara tujuan" aria-describedby="inputGroupPrepend2" name="bandara_tujuan" value="<?=isset($_POST['bandara_tujuan']) ? $_POST['bandara_tujuan'] : ''?>" required>
                            

                            <img src="ka.png" alt="" width="32" height="32" title="Tanggal berangkat">
                            <input type="date" class="form-control" id="validationDefaultUsername" placeholder="Tanggal Berangkat" aria-describedby="inputGroupPrepend2" name="tanggal_berangkat" value="<?=isset($_POST['tanggal_keberangkatan']) ? $_POST['tanggal_keberangkatan'] : ''?>" required>
                            
                            <img src="pe.png" alt="" width="32" height="32" title="Penumpang">
                            <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Tiket yang di pesan" aria-describedby="inputGroupPrepend2" name="penumpang"   value="<?=isset($_POST['penumpang']) ? $_POST['penumpang'] : ''?>"  required>
                            <img src="iy.png" alt="" width="32" height="32" title="pesawat">
                            <select class="form-control" id="val" name="pesawat" value="<?=isset($_POST['pesawat']) ? $_POST['pesawat'] : ''?>" required>
                                <option selected disabled >Pesawat</option>
                                <option>Garuda Indonesia</option>
                                <option>Lion air</option>
                                <option>AIRbus</option>
                                <option>Bombardier</option>
                                <option>citilink</option>
                            </select>

                            <img src="ja.png" alt="" width="32" height="32" title="jam">
                            <input type="time" class="form-control" id="validationDefaultUsername" placeholder="Tiket yang di pesan" aria-describedby="inputGroupPrepend2" name="jam" value="<?=isset($_POST['jam']) ? $_POST['jam'] : ''?>" required>
                             
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="submit" name="submit" >
                </form>
        </div>
<style>body{
    background: url(af.jpg);
    color: #fff;
}
.pemesanan{
    box-shadow: 0 0 50px black;
    	font-family: 'Raleway', sans-serif;

}
.pemesanan h4{
    color: black;
    
}
.kotak{
    width: 400px;
    margin: 80px auto;
    padding: 50px 20px;
 
	font-weight: 400;
	color: #fff;
	text-transform: uppercase;
  text-align: center;
  position: relative;
	max-width: 768px;
	width: 100%;
	margin: auto;
  background: #1a1b1d;
  background-color: transparent;


}
</style>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>