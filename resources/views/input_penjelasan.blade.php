<!DOCTYPE html>
<html lang="en">

<head>
    <meta charet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>BALAB</title>
    <link rel="stylesheet" href="{{URL :: asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL :: asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL :: asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
</head>
<!-- My CSS -->
<link rel="stylesheet" href="{{URL :: asset('assets/styles/input_penjelasan.css')}}">
</head>

<body>
    <section class="input-penjelasan">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="navbar-expand">
                    <img src="{{ URL::asset('assets/images/header.png') }}" alt=" " width=" " height="100" class="d-inline-block align-text-top">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ URL('/Home/dokter')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL('/profil/dokter')}}">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL('/bantuan')}}">Bantuan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL('/Tentang/dokter') }}">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL('/sisi/dokter') }}">Daftar Pasien</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="container-xl">
            <div class="col">
                <div class="row ">
                    <div class="col d-flex justify-content-center">
                        <div class="container rounded-3" style="height: 150px; width: 900px; background-color:rgba(231, 223, 223, 0.603);">
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
            <div class="container"><br>
                <h4 style="text-align: center;">Hasil Laboratorium</h4>
                <div class="col ">
                    <div class="row justify-content-center">
                        <div class="row justify-content-center" class="container" style="height: 240px; width: 900px; background-color:rgba(255, 254, 254, 0.705);">
                            <div class="btn-wrapper"><br>
                                <a href="#" class="btn pdf"><span class="fa fa-file-pdf-o"></span>PDF</a>
                                <p></p>
                                <a href="#" class="btn picture"><span class="fa fa-file-picture-o"></span>Rontgen</a>
                                <p></p>
                                <a href="#" class="btn folder"><span class=" fa fa-folder-o "></span>Diagnosa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <p class="title fs-5 fw-bold text-center">Penjelasan Hasil Laboratorium</p>
            <div class="form-floating ms-auto md-5">
                <textarea class="form-control position-relative" placeholder="Leave a comment here" id="floatingTextarea" style="width: 57rem; height: 15rem"></textarea>
                <label for="floatingTextarea" style="margin-left: 7.5rem">Comments</label>
            </div><br>
            <button type="submit" class="btn-success fw-bold" style="width: 9rem; margin-left: 54rem;">Kirim</button>
        </section><br>
    </section>
    <footer class="whatsapp" style="background:rgb(192, 230, 255); color:rgb(22, 58, 90); padding: 4px; text-align:right;">
        <b>
            <p>Tanya Dokter? Hubungi<br /><a href="whatsapp://send?text=Halo, saya ingin konsultasi&phone=+6282366286069"><img src="{{ URL::asset('assets/images/wa.png') }}" width="50" height="50"></a>082366286069</p>
        </b>
    </footer>
</body>

</html>