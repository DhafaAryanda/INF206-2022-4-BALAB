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
    <section class="tabel-laboran">
        <nav></nav>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                                <a class="nav-link" href="#">Galeri</a>
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
            <div class="profil">
                <div class="row">
                    <div class="col ms-5">
                        <div class="profil">
                            <img src="{{ URL::asset('assets/images/profil.png') }}" alt="" width="90" height="100">
                        </div>
                    </div>
                    <div class="col ms-5">
                        <div class="biodata">
                            <table width="30%">
                                <tbody>
                                    <tr>
                                        <td valign="top">
                                            <table width="100%" style="padding-left: 2px; padding-right: 13px;">
                                                <tbody>
                                                    <tr>
                                                        <td width="50%" valign="bottom" class="textt ms-5">Slamet S.kes</td>
                                                        <td width="50%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="textt">190810700027698</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="button ms-5">
                                <button type="submit" class="btn btn-danger me-3">Keluar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                <tr>
                    <th scope="row">1</th>
                    <td>Siti Aisyah</td>
                    <td>11 Februari 2022</td>
                    <td>Detail</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Dilan</td>
                    <td>26 Januari 2022</td>
                    <td>Detail</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Abidzar</td>
                    <td>19 Januari 2022</td>
                    <td>Detail</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Sulaiman Daud</td>
                    <td>14 Januari 2022</td>
                    <td>Detail</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Sahlan</td>
                    <td>14 Januari 2022</td>
                    <td>Detail</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Muzanni</td>
                    <td>11 Januari 2022</td>
                    <td>Detail</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Siti Aminah</td>
                    <td>11 Januari 2021</td>
                    <td>Detail</td>
                </tr>
            </tbody>
        </table>

</body>

</html>