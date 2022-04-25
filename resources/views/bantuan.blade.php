<!doctype html>
<html lang="en">

<head>
    <meta charet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>BALAB</title>
    <link rel="stylesheet" href="{{ URL :: asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ URL :: asset('assets/styles/styles.css')}}" />
    <link rel="stylesheet" href="{{ URL :: asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL :: asset('assets/styles/bantuan.css')}}">
</head>

<body>
    <section class="bantuan">
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
                                <a class="nav-link" href="{{ URL('/tentang/kami') }}">Tentang</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="form"><br>
            <h3 style="color: darkgoldenrod;text-align:left;">Bantuan</h3> 
        </div>
        <div class="elemen">
            <div class="row justify-content-center" class="elemen" style="height: 50px; width: 900px; background-color: beige;">         
           <p>Bagaimana cara mengunduh hasil lab?</p>
        </div>
        </div>
        <div class="elemen">
            <div class="row justify-content-center" class="elemen" style="height: 50px; width: 900px; background-color: beige;">         
            <p>Dimana dapat dilihat hasil lab?</p>
        </div>
        </div>
        <div class="elemen">
            <div class="row justify-content-center" class="elemen" style="height: 50px; width: 900px; background-color: beige;">         
            <p>Bagaimana cara kita mengetahui bahwa hasil lab sudah keluar?</p>
        </div>
        </div>
    </section>
    <script src="{{ URL :: asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>