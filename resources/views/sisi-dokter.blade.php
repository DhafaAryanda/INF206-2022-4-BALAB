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
                        <a class="nav-link active" aria-current="page" href="{{ URL('/Home/dokter')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('/profil/dokter')}}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('/input/penjelasan')}}">Upload Penjelasan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('/Bantuan/dokter') }}">Bantuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('/Tentang/dokter') }}">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container-xl">
        <div class="col">
            <div class="row ">
                <div class="col d-flex justify-content-center">
                    <div class="container rounded-3" style="height: 150px; width: 750px; background-color:rgb(211, 211, 211); margin-left:260px;">
                        <div class="row fw-bold">
                            <div class="col">
                                <img src="{{ URL::asset('assets/images/profil.png') }}" alt="user" width="100" class="rounded-circle ms-5 mt-3">
                            </div>
                            <div class="col">
                                <p></p>
                                <br />
                                <div class="badge bg-dark tex ms-2 fw-bold rounded fs-6" style="width:11rem;">
                                    {{auth()->user()->name}}
                                </div>
                                <br><br>
                                <div class="badge bg-dark tex ms-2 fw-bold rounded fs-6" style="width:11rem">
                                    {{auth()->user()->NIP}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br></br>
                <div class="d-flex justify-content-center">
                    <h2 style="margin-left:140px;">Daftar Pasien</h2>
                </div>
                @if(session()->has('berhasil'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{session('berhasil')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                </div>
                 @endif
                 @if(session()->has('gagal'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('gagal')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                </div>
                 @endif
                <div class="container-fluid" style="width: 775px; margin-left: 260px;">
                    <table class="table">
                        <thead class="table-dark text-center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">tanggal Periksa</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody class="table-primary text-center">
                             @foreach($post as $p)
                                <tr>
                                    <th scope="row">{{$loop -> iteration}}</th>
                                    <td>{{$p -> nama}}</td>
                                    <td>{{$p -> tglPeriksa}}</td>
                                    <td>
                                        <a href=" ">Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <div class="container-fluid" style="margin-left: 260px;">
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
                                            <form action="/sisi/dokter" method="post">
                                                @csrf
                                                <div>
                                                    <label for="nama" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" id="nama" name="nama">
                                                </div>
                                                <div>
                                                    <label for="tanggal" class="form-label">Tanggal Periksa</label>
                                                    <input type="text" class="form-control" id="tanggal" name="tglPeriksa">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                                                    <button typr="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
        <footer class="whatsapp" style="background:rgb(192, 230, 255); color:rgb(22, 58, 90); padding: 4px; text-align:right;">
            <b>
                <p>Tanya Dokter? Hubungi<br /><a href="whatsapp://send?text=Halo, saya ingin konsultasi&phone=+6282366286069"><img src="{{ URL::asset('assets/images/wa.png') }}" width="50" height="50"></a>082366286069</p>
            </b>
        </footer>
    </section>
    <script src="{{ URL :: asset('assets/bootstrap/list-Materi-Bootstrap/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>