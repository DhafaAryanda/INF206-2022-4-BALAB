<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BALAB</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/input_data.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/input_data.css') }}">
</head>

<body>
<section class="input-data">
        <nav></nav>
        <div class="container-fluid">
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
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Hubungi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tentang</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <section class="position-absolute top-50 start-50 translate-middle">
            <div class="container rounded-3" style="height: 150px; width: 800px; background-color:rgb(211, 211, 211);">
                <div class="row fw-bold">
                    <div class="col">
                        <img src="{{ URL::asset('assets/images/profil.png')}}" alt="" width="80" class="rounded-circle img-thumbnail ms-5 mt-3">
                        <br>
                        <button type="button" class="btn btn-danger fw-bold mt-2 ms-5 btn-sm" style="width: 5rem;">keluar</button>
                    </div>
                    </div>
                    <div class="col">
                        <p></p>
                        <br/><div class="badge bg-white text-body text-start tex ms-2 fw-bold fs-6">Nama</div><br>
                        <div class="badge bg-white text-body text-start tex ms-2 fw-bold fs-6 mt-2">No. Pasien</div>
                    </div>
                <div class="col">
                    <p></p>
                    <br/>:
                        <div class="badge bg-primary text-start tex ms-2 fw-bold rounded-pill fs-6" style="width: 12rem ;">Dilan</div>
                        <br>:
                            <div class="badge bg-primary text-start tex ms-2 fw-bold rounded-pill fs-6 mt-2" style="width:12rem">2008107010027698</div>
                </div>
                <div class="col">
                    <p></p>
                    <br/><div class="badge bg-white text-body text-start tex ms-5 fw-bold fs-6">Dokter PJ</div>
                     <br>
                    <div class="badge bg-white text-body text-start tex ms-5 fw-bold fs-6 mt-2">Laboran</div>
                </div>
                <div class="col">
                    <p></p>
                    <br/>
                        :
                        <div class="badge bg-primary text-start tex ms-2 fw-bold rounded-pill fs-6" style="width: 12rem ;">dr. Irawan</div>
                        <br>:
                            <div class="badge bg-primary text-start tex ms-2 fw-bold rounded-pill fs-6 mt-2" style="width:12rem">Slamet, S.Tr.Kes</div>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>
</html>