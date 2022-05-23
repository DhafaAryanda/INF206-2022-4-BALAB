

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charet="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>BALAB</title>
  <link rel="stylesheet" href="{{ URL :: asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL :: asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL :: asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css') }}">
  <!-- My CSS -->
  <link rel="stylesheet" href="{{ URL :: asset('assets/styles/style.css')}}">
  <!-- JavaScript -->
  <link rel="stylesheet" href="{{ URL :: asset('assets/js/script.js')}}">
</head>

<body>
  <style>
    body {
      background-image: url(/assets/images/background.png);
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <div class="navbar-expand">
        <img src="{{ URL::asset('assets/images/header.png') }}" alt=" " width=" " height="100" class="d-inline-block align-text-top" />
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ URL('/Home/laboran')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL('/profil/laboran')}}">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL('/laboran')}}">Daftar Pasien</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL('/Bantuan/laboran') }}">Bantuan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL('/Tentang/laboran') }}">Tentang</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-xl">
    <div class="col">
      <div class="row ">
        <div class="col d-flex justify-content-center">
          <div class="container rounded-3" style="height: 150px; width: 900px; background-color:rgba(225, 225, 225);">
            <div class="row fw-bold">
              <div class="col">
                <img src="{{ URL::asset('assets/images/profil.png') }}" alt="user" height="110px" width="100" class="rounded-circle ms-5 mt-3" style="margin-left: 10px">
                <br>
              </div>
              <div class="col">
                <p></p>
                <br />

                <div class="bg-gradient text-start rounded fs-7" style="width: 7rem; font-family:serif;">
                  Nama :
                </div>
                <br>
                <div class="bg-gradient text-start rounded fs-8" style="width:8rem; font-family:serif;">
                  No. Pasien :
                </div>
              </div>
              <div class="col">
                <p></p>
                <br />
                <div class="bg-light text-center rounded-end" style="width: 10rem; font-family:serif;">
                  Dilan
                </div>
                <br>
                <div class="bg-light text-center fw-bold rounded" style="width: 10rem; font-family:serif;">
                  2008107010026798
                </div>
              </div>
              <div class="col">
                <p></p>
                <br />
                <div class="bg-gradient text-start rounded fs-7" style="width: 7rem; font-family:serif;">
                  Dokter PJ :
                </div>
                <br>
                <div class="bg-gradient text-start rounded fs-7" style="width: 7rem; font-family:serif;">
                  Laboran :
                </div>
              </div>
              <div class="col">
                <p></p>
                <br />
                <div class="bg-light text-center fw-bold rounded fs-8" style="width: 12rem; font-family:serif;">
                  dr. Irawan
                </div>
                <br>
                <div class="bg-light tex text-center fw-bold rounded fs-8" style="width: 12rem; font-family:serif;">
                  Slamet, S.Tr.Kes.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper position-absolute bottom-0 start-50 top-40 translate-middle-x">
    <form action="#">
      <input class="file-input" type="file" name="file" hidden />
      <i class="fas fa-cloud-upload-alt"></i>
      <p>Browse File to Upload</p>
    </form>
  </div>
  <div class="position-absolute top-100 start-50 translate-middle">
    <p></p>
    <br><br><br><br><br><br><br><br><br>
    <p class="title fs-5 fw-bold text-center">Penjelasan Hasil Laboratorium</p>
    <div class="form-floating">
      <textarea class="form-control position-relative ms-1" placeholder="Leave a comment here" id="floatingTextarea" style="width: 55rem; height: 10rem" readonly="readonly" 
      autofocus> @foreach ($postpenjelasan as $post) {{ $post->penjelasan  }}  @endforeach</textarea>
      <label for="floatingTextarea text-start mt-3">Contoh Penjelasan</label>
    </div>
  </div>
  <script src="{{ URL::asset('assets/js/script.js')}}"></script>
  </section>
  <br><br><br>
  <footer class="whatsapp" style="background: rgb(192, 230, 255); color: rgb(22, 58, 90); padding: 4px; text-align: right">
    <b>
      <p>
        Tanya Dokter? Hubungi<br /><a href="whatsapp://send?text=Halo, saya ingin konsultasi&phone=+6282366286069"><img src="{{ URL::asset('assets/images/wa.png') }}" width="50" height="50" /></a>082366286069
      </p>
    </b>
  </footer>
</body>

</html>