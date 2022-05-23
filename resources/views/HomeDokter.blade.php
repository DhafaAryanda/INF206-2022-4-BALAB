<!DOCTYPE html>
<html lang="en">

<head>
    <meta charet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>BALAB</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/home-dl.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/styles.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/homedl.css')}}">
</head>

<body>
    {{-- @dd() --}}
    {{-- {{$post[0]->id}} --}}
    <section class="home-dl">
        <nav></nav>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="navbar-expand">
                        <img src="{{ URL('assets/images/header.png')}}" alt=" " width=" " height="100" class="d-inline-block align-text-top">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link active" aria-current="page" href="{{ URL('/Home/dokter')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL('/profil/dokter')}}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL('/Bantuan/dokter') }}">Bantuan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL('/Tentang/dokter') }}">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit"  class="btn btn-danger" style="margin-left: 26rem; margin-bottom: -3rem;">
                                            Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                        
                    </div>
                   
                </div>
            </nav>
        </div>
        <br /><br /><br /><br /><br /><br />
        <aside class="sidebar">
            <div class="widget">
                <div>
                    <img class="widget-pict" src="{{ URL('assets/images/rsu1.png')}}" alt="pict" width="100%">
                </div>

                <h2>Info</h2>
                <p>Sekda Apresiasi Semangat Perubahan Tenaga Medis RSUDZA</p>
                <a href="https://www.harianatjeh.com/news/sekda-apresiasi-semangat-perubahan-tenaga-medis-rsudza/index.html" class="faq-selengkapnya">Selengkapnya -></a>
            </div>
        </aside>

        <aside class="sidebar">
            <div class="widget">
                <div>
                    <img class="widget-pict" src="{{ URL('assets/images/rsu.png')}}" alt="pict" width="100%">
                </div>

                <h2>Info</h2>
                <p>8 pasien RSUDZA negatif corona, 2 orang menunggu hasil laboratorium</p>
                <a href="https://m.merdeka.com/peristiwa/8-pasien-rsuza-banda-aceh-negatif-corona-2-orang-menunggu-hasil-laboratorium.html" class="faq-selengkapnya">Selengkapnya -></a>
            </div>
        </aside>

        <aside class="sidebar">
            <div class="widget">
                <div>
                    <img class="widget-pict" src="{{ URL('assets/images/tips.png')}}" alt="pict" width="100%">
                </div>

                <h2>Info</h2>
                <p>Tips Makanan Sehat Selama Ramadhan</p>
                <a href="https://www.republika.co.id/berita/r9r922430/tips-makanan-sehat-selama-ramadhan" class="faq-selengkapnya">Selengkapnya -></a>
            </div>
        </aside>

        <aside class="sidebar">
            <div class="widget">
                <div>
                    <img class="widget-pict" src="{{ URL('assets/images/tips2.png')}}" alt="pict" width="100%">
                </div>

                <h2>Info</h2>
                <p>Agar Tetap Sehat di Masa Pandemi Covid-19</p>
                <a href="http://p2ptm.kemkes.go.id/kegiatan-p2ptm/dki-jakarta/tips-agar-tetap-sehat-di-masa-pandemi-covid-19" class="faq-selengkapnya">Selengkapnya -></a>
            </div>
        </aside>

        <div class="text-center">
            <div class="widget2">
                <div>
                    <img class="widget-pict2" src="{{ URL('assets/images/daftarlogo.png')}}" alt="logo" width="100%">
                </div>

                <h3>Daftar Pasien</h3>
                <a href="{{ URL('/sisi/dokter')}}" class="loogo">cek-></a>
            </div>
        </div>
    </section>

</body>

</html>