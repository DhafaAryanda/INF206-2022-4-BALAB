<?php
//Variabel
$host           = "localhost";
$user           = "root";
$password       = "";
$db             = "projekrpl";
$namaPasien     = "";
$noPasien       = "";
$namaDokter     = "";
$namaLaboran    = "";
$Penjelasan     = "";
$uploadFiles    = "";

//menghubungkan ke database MySQL
$koneksi    = mysqli_connect($host, $user, $password, $db);

//melakukan cek koneksi database
if ($koneksi == false) {
    die("Gagal melakukan koneksi ke database");    
}
//write query for nama dokter pj
  $sql1 = "SELECT nama_dokter FROM dokter inner join diagnosis on nip_dokter = nip AND no_pasien = 333312301;";
  $sql2 = "SELECT nama_laboran FROM laboran inner join hasillab on nip_laboran = nip AND no_pasien = 333312301;";
  $sql3 = "SELECT nama_pasien FROM pasien where no_pasien = 333312301;";
  $sql4 = "SELECT no_pasien FROM pasien where no_pasien = 333312301;";

  //make query & get result
  $result1 = mysqli_query($koneksi, $sql1);
  $result2 = mysqli_query($koneksi, $sql2);  
  $result3 = mysqli_query($koneksi, $sql3);
  $result4 = mysqli_query($koneksi, $sql4);
 
  //fetch the resulting rows as an array
  $dokterpj  = mysqli_fetch_all($result1, MYSQLI_ASSOC);
  $laboranpj = mysqli_fetch_all($result2, MYSQLI_ASSOC);
  $pasien    = mysqli_fetch_all($result3, MYSQLI_ASSOC);
  $no_pasien  = mysqli_fetch_all($result4, MYSQLI_ASSOC);
  
  //free result from memory
  mysqli_free_result($result1);
  mysqli_free_result($result2);
  mysqli_free_result($result3);
  mysqli_free_result($result4);

  //close connection
  mysqli_close($koneksi);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>BALAB</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <style>
      body {
        background-image: url(background.png);
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <div class="navbar-expand">
          <img src="header.png" alt=" " width=" " height="100" class="d-inline-block align-text-top" />
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        
        
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hubungi></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tentang</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <section class="container-xl" style="width: 1200px">
      <div class="col">
        <div class="row">
          <div class="col d-flex justify-content-center">
            <div class="container rounded-3" style="height: 5px; width: 900px; background-color: rgba(231, 223, 223, 0.603)">
              <div class="row fw-bold">
                <div class="col">
                  <img src="profil.png" alt="user" width="80" class="rounded-circle ms-5 mt-4" />
                  <br />
                  <button type="button" class="btn-danger fw-bold mt-2 ms-5 btn-sm" style="width: 5rem">keluar</button>
                </div>
                <div class="col">
                  <p></p>
                  <br />
                  <div class="bg-gradient text-start rounded fs-7" style="width: 7rem; font-family: serif">Nama :</div>
                  <br />
                  <div class="bg-gradient text-start rounded fs-8" style="width: 8rem; font-family: serif">No. Pasien :</div>
                </div>
                <div class="col">
                  <p></p>
                  <br />
                  <div class="bg-light text-center rounded-end" style="width: 10rem; font-family: serif"><?php echo htmlspecialchars($pasien[0]['nama_pasien'])?></div>
                  <br />
                  <div class="bg-light text-center fw-bold rounded" style="width: 10rem; font-family: serif"><?php echo htmlspecialchars($no_pasien[0]['no_pasien'])?></div>
                </div>
                <div class="col">
                  <p></p>
                  <br />
                  <div class="bg-gradient text-start rounded fs-7" style="width: 7rem; font-family: serif">Dokter PJ :</div>
                  <br />
                  <div class="bg-gradient text-start rounded fs-7" style="width: 7rem; font-family: serif">Laboran :</div>
                </div>
                <div class="col">
                  <p></p>
                  <br />
                  <div class="bg-light text-center fw-bold rounded fs-8" style="width: 12rem; font-family: serif"><?php echo htmlspecialchars($dokterpj[0]['nama_dokter'])?></div>
                  <br />
                  <div class="bg-light tex text-center fw-bold rounded fs-8" style="width: 12rem; font-family: serif"><?php echo htmlspecialchars($laboranpj[0]['nama_laboran']) ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper position-absolute bottom-0 start-50 translate-middle-x">
        <h5>File Uploader JavaScript</h5>
        <form action="#">
          <input class="file-input" type="file" name="file" hidden />
          <i class="fas fa-cloud-upload-alt"></i>
          <p>Browse File to Upload</p>
        </form>
        <section class="progress-area"></section>
        <section class="uploaded-area"></section>
      </div>

      <div class="position-absolute top-100 start-50 translate-middle">
        <br /><br /><br /><br /><br /><br /><br />
        <p class="title fs-5 fw-bold text-center">Penjelasan Hasil Laboratorium</p>
        <div class="form-floating">
          <textarea class="form-control position-relative ms-1" placeholder="Leave a comment here" id="floatingTextarea" style="width: 55rem; height: 10rem" readonly="readonly" autofocus>
            Secara umum dari hasil lab tersebut terdapat peningkatan leukosit (sel darah putih) yang dapat terjadi baik karena infeksi, peradangan, alergi, stres, keganasan dan sebagainya. 
            Sel darah putih berperan dalam kekebalan tubuh. Oleh karena penyebab peningkatan nilai tersebut dapat terjadi karena berbagai hal, perlu dilakukan pemeriksaan yang lebih lengkap 
            agar diketahui penyebab keluhan dan dapat diberikan penanganan sesuai. Semoga membantu.</textarea
          >
          <label for="floatingTextarea text-start mt-3">Contoh Penjelasan</label>
        </div>
      </div>
      <script src="script.js"></script>
    </section>

    <footer class="whatsapp" style="background: rgb(192, 230, 255); color: rgb(22, 58, 90); padding: 4px; text-align: right">
      <b>
        <p>
          Tanya Dokter? Hubungi<br /><a href="whatsapp://send?text=Halo, saya ingin konsultasi&phone=+6282366286069"><img src="wa.png" width="50" height="50" /></a>082366286069
        </p>
      </b>
    </footer>
  </body>
</html>
