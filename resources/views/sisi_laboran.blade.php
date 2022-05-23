<?php
//Variabel
// $host           = "localhost";
// $user           = "root";
// $password       = "";
// $db             = "balab";
// $namaPasien     = "";
// $noPasien       = "";
// $namaDokter     = "";
// $namaLaboran    = "";
// $Penjelasan     = "";
// $uploadFiles    = "";

//menghubungkan ke database MySQL
// $koneksi    = mysqli_connect($host, $user, $password, $db);

//melakukan cek koneksi database
// if ($koneksi == false) {
//     die("Gagal melakukan koneksi ke database");    
// }
//write query for nama dokter pj
// $sql1 = "SELECT nama_dokter FROM dokter inner join diagnosis on nip_dokter = nip AND no_pasien = 333312301;";
// $sql2 = "SELECT nama_laboran FROM laboran inner join hasillab on nip_laboran = nip AND no_pasien = 333312301;";
// $sql3 = "SELECT nama_pasien FROM pasien where no_pasien = 333312301;";
// $sql4 = "SELECT no_pasien FROM pasien where no_pasien = 333312301;";

//make query & get result
// $result1 = mysqli_query($koneksi, $sql1);
// $result2 = mysqli_query($koneksi, $sql2);  
// $result3 = mysqli_query($koneksi, $sql3);
// $result4 = mysqli_query($koneksi, $sql4);

// //fetch the resulting rows as an array
// $dokterpj  = mysqli_fetch_all($result1, MYSQLI_ASSOC);
// $laboranpj = mysqli_fetch_all($result2, MYSQLI_ASSOC);
// $pasien    = mysqli_fetch_all($result3, MYSQLI_ASSOC);
// $no_pasien  = mysqli_fetch_all($result4, MYSQLI_ASSOC);

//free result from memory
// mysqli_free_result($result1);
// mysqli_free_result($result2);
// mysqli_free_result($result3);
// mysqli_free_result($result4);

//close connection
// mysqli_close($koneksi);
?>

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
        background-size: cover;
        background-repeat: no-repeat;
    }

    input[type="file"] {
        width: 18%;
        border-radius: 0%;
    }
    button{
      margin-top:350px;
    }

    .drop-zone {
            /* border-radius: 50%; */
            width: 700px;
            height: 200px;
            padding: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-family: "Quicksand", sans-serif;
            font-weight: 500;
            font-size: 20px;
            cursor: pointer;
            color: #cccccc;
            /* border: 2px solid; */
        }

        .drop-zone--over {
            /* border-style: solid; */
        }

        .drop-zone__input {
            display: none;
        }

        .drop-zone__thumb {
            width: 100%;
            height: 100%;
            /* border-radius: 100%; */
            overflow: hidden;
            background-color: #cccccc;
            background-size: cover;
            position: relative;
        }

        .drop-zone__thumb::after {
            content: attr(data-label);
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 5px 0;
            color: #ffffff;
            background: rgba(0, 0, 0, 0.75);
            font-size: 14px;
            text-align: center;
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
                {{-- @dd($post) --}}
                @if(isset($post->pasien->uploadGambar))
                <img src="{{ URL::asset('storage/'. $post->pasien->uploadGambar) }}" alt="user" height="100" width="100" class="rounded-circle ms-5 mt-3" style="margin-left: 10px">
                @endif
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
                  {{$post->pasien->nama}}
                </div>
                <br>
                <div class="bg-light text-center fw-bold rounded" style="width: 10rem; font-family:serif;">
                  {{$post->user->noBPJS}}
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
                  {{$post->dokter->nama}}
                </div>
                <br>
                <div class="bg-light tex text-center fw-bold rounded fs-8" style="width: 12rem; font-family:serif;">
                  {{-- @dd(Auth::user()->name) --}}
                  {{Auth::user()->name}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper position-absolute bottom-0 start-50 top-40 translate-middle-x">
    <form action="/sisi/laboran" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="record_id" value={{$post->id}}>
      {{-- @dd($post->id) --}}
      {{-- <div class="card-body text-center"> --}}
        <!-- Profile picture image-->
        <span class="drop-zone__prompt  mt-5 ">
          <br><br>
            
            <div class="drop-zone offset  justify-content-center ">
                {{-- <img src="{{asset('storage/' . $post[0]->dokter->uploadGambar)}}" alt="{{$post[0]->dokter->nama}}" width="200" height="200" class="justify-content-center rounded-circle"> --}}
                {{-- @if($post->UploadPDF === NULL)
                <i class="fas fa-cloud-upload-alt"></i>
                
                <p>Browse File to Upload</p>
                @endif --}}
        </span>
        <input type="file" class="drop-zone__input file-input" name="UploadPDF">
        <div class="button"><button type="submit" class="btn btn-primary ">Kirim</button></div>
        
    {{-- </div><br> --}}
    </form>
  </div>
  <div class="position-absolute top-100 start-50 translate-middle">
    <p></p>
    <br><br><br><br><br><br><br><br><br>><br><br><br>
    {{-- <p class="title fs-5 fw-bold text-center">Penjelasan Hasil Laboratorium</p>
    <div class="form-floating">
      
      <textarea class="form-control position-relative ms-1" placeholder="Leave a comment here" id="floatingTextarea" style="width: 55rem; height: 10rem" readonly="readonly" autofocus>
            Secara umum dari hasil lab tersebut terdapat peningkatan leukosit (sel darah putih) yang dapat terjadi baik karena infeksi, peradangan, alergi, stres, keganasan dan sebagainya. 
            Sel darah putih berperan dalam kekebalan tubuh. Oleh karena penyebab peningkatan nilai tersebut dapat terjadi karena berbagai hal, perlu dilakukan pemeriksaan yang lebih lengkap 
            agar diketahui penyebab keluhan dan dapat diberikan penanganan sesuai. Semoga membantu.</textarea>
      <label for="floatingTextarea text-start mt-3">Contoh Penjelasan</label>
    </div>
  </div> --}}
  <script src="{{ URL::asset('assets/js/script.js')}}"></script>
  </section>
 
  {{-- <footer class="whatsapp" style="background: rgb(192, 230, 255); color: rgb(22, 58, 90); padding: 4px; text-align: right">
    <b>
      <p>
        Tanya Dokter? Hubungi<br /><a href="whatsapp://send?text=Halo, saya ingin konsultasi&phone=+6282366286069"><img src="{{ URL::asset('assets/images/wa.png') }}" width="50" height="50" /></a>082366286069
      </p>
    </b>
  </footer> --}}

  <script>
    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
        const dropZoneElement = inputElement.closest(".drop-zone");
        dropZoneElement.addEventListener("click", (e) => {
            inputElement.click();
        });
        inputElement.addEventListener("change", (e) => {
            if (inputElement.files.length) {
                updateThumbnail(dropZoneElement, inputElement.files[0]);
            }
        });
        dropZoneElement.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropZoneElement.classList.add("drop-zone--over");
        });
        ["dragleave", "dragend"].forEach((type) => {
            dropZoneElement.addEventListener(type, (e) => {
                dropZoneElement.classList.remove("drop-zone--over");
            });
        });
        dropZoneElement.addEventListener("drop", (e) => {
            e.preventDefault();
            if (e.dataTransfer.files.length) {
                inputElement.files = e.dataTransfer.files;
                updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
            }
            dropZoneElement.classList.remove("drop-zone--over");
        });
    });
    /**
     * Updates the thumbnail on a drop zone element.
     *
     * @param {HTMLElement} dropZoneElement
     * @param {File} file
     */
    function updateThumbnail(dropZoneElement, file) {
        let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");
        // First time - remove the prompt
        if (dropZoneElement.querySelector(".drop-zone__prompt")) {
            dropZoneElement.querySelector(".drop-zone__prompt").remove();
        }
        // First time - there is no thumbnail element, so lets create it
        if (!thumbnailElement) {
            thumbnailElement = document.createElement("div");
            thumbnailElement.classList.add("drop-zone__thumb");
            dropZoneElement.appendChild(thumbnailElement);
        }
        thumbnailElement.dataset.label = file.name;
        // Show thumbnail for image files
        if (file.type.startsWith("image/")) {
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => {
                thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
            };
        } else {
            thumbnailElement.style.backgroundImage = null;
        }
    }
</script>
</body>

</html>