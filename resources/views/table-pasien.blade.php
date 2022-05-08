<html lang="en">

<head>
    <meta charet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>BALAB</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/table-pasien.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/table-pasien.css') }}">
</head>

<body>
    <style>
        body {
            background-image: url(/assets/images/background.png);
        }
    </style>
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
                        <a class="nav-link active" aria-current="page" href="{{ URL('/Home/laboran')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('/profil/laboran')}}">Profil</a>
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

    <section class="container-xl">
        <div class="col">
            <div class="row ">
                <div class="col d-flex justify-content-center" style="margin-left: 175px;">
                    <div class="container rounded-3" style="height: 150px; width: 900px; background-color:rgba(231, 223, 223, 0.603);">
                        <div class="row fw-bold">
                            <div class="col">
                                <img src="{{ URL::asset('assets/images/profil.png') }}" alt="user" width="80" class="rounded-circle ms-5 mt-3">
                                <br>
                                <a href="{{ URL('/laboran/login') }}" class="btn-danger fw-bold mt-2 ms-5 btn-sm" style="width: 5rem;">keluar</a>
                            </div>
                            <div class="col">
                                <p></p>
                                <br />
                                <div class="bg-light text-center fw-bold rounded fs-6" style="width:12rem; font-family:serif;">
                                    Slamet, S.Tr.Kes.
                                </div>
                                <br>
                                <div class="bg-light text-center fw-bold rounded fs-6" style="width:12rem; font-family:serif;">
                                    1908107010027698
                                </div>
                            </div>
                            <div class="col"></div>
                            <div class="col"></div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div><br></br>
                <div class="d-flex justify-content-center">
                    <h2 style="margin-left: 150px;">Daftar Pasien</h2>
                </div>
                <div class="container-fluid" style="width: 925px; margin-left:185px;">
                    <table class="table">
                        <thead class="table-dark text-center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Tanggal Periksa</th>
                                <th scope="col">Hasil Lab</th>
                            </tr>
                        </thead>
                        <tbody class="table-primary text-center">
                            <php? $i=1; ?>
                                @foreach($post as $p)
                                <tr>
                                    <th scope="row">{{$loop -> iteration}}</th>
                                    <td>{{$p -> nama}}</td>
                                    <td>{{$p -> tanggal_periksa}}</td>
                                    <td>
                                        <a href=" ">Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <div class="container-fluid" style="margin-left: 330px;">
                        <div class="container">
                            <!-- Button trigger modal -->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Tambah Pasien
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Pasien</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/laboran" method="post">
                                                @csrf
                                                <div>
                                                    <label for="nama" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" id="nama" name="nama">
                                                </div>
                                                <div>
                                                    <label for="tanggal" class="form-label">Tanggal Periksa</label>
                                                    <input type="text" class="form-control" id="tanggal" name="tanggal_periksa">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                                                    <button href="{{ URL('/laboran')}}" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <footer class="whatsapp" style="background: rgb(192, 230, 255); color: rgb(22, 58, 90); padding: 4px; text-align: right;">
                <b>
                    <p>
                        Tanya Dokter? Hubungi<br /><a href="whatsapp://send?text=Halo, saya ingin konsultasi&phone=+6282366286069"><img src="{{ URL::asset('assets/images/wa.png') }}" width="50" height="50" /></a>082366286069
                    </p>
                </b>
            </footer>
    </section>
    <script src="{{ URL :: asset('assets/bootstrap/list-Materi-Bootstrap/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>