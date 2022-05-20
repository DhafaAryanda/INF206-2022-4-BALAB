<!doctype html>
<html lang="en">

<head>
    <meta charet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>BALAB</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/login-dokter.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/dokter.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/dokter.css') }}">
</head>

<body>
    <section class="login-dokter">
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
                </div>
            </nav>
        </div>
        @if(session()->has("error"))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                
            </button>
            </div>
        @endif
        <form class="form" action="/dokter/login" method="post">
            @csrf
            <div class="mb-3">
                <label name="email" for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control  @error('email') is-invalid @enderror " id="email "aria-describedby="emailHelp" autofocus required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ingatkan saya</label>
            </div>
            <button class="btn btn-primary" type="submit" style="margin-left: 9rem;">
                 Masuk
            </button>
            <div class="button1"> <br>
                <a href="{{ URL('/laboran/login') }}" class="btn btn-success" role="button">Masuk sebagai laboran</a><br>
            </div> <br>
            <div class="button2">
                <a href="{{ URL('/login/pasien') }}" class="btn btn-dark" role="button">Masuk sebagai pasien</a>
            </div>
        </form>
    </section>
    <script src="{{ URL :: asset('assets/bootstrap/list-Materi-Bootstrap/assets/js/bootstrap.min.js')}}"></script>
</body>


</html>
