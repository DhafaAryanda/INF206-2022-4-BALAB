<!DOCTYPE html>
<html lang="en">

<head>
    <meta charet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>BALAB</title>
    <link rel="stylesheet" href="{{URL :: asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL :: asset('assets/styles/login-pasien.css')}}">
    <link rel="stylesheet" href="{{URL :: asset('assets/styles/styles.css')}}">
    <link rel="stylesheet" href="{{URL :: asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL :: asset('assets/styles/loginn_pasien.css')}}">
</head>

<body>
    <section class="login-pasien">
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

        <form class="form">
            <div class="mb-3">
                <label for="exampleInputID1" class="form-label">ID pasien</label>
                <input type="ID" class="form-control" id="exampleInputID1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">ingat saya</label>
            </div>
            <div class="button">
                <a href="{{ URL('/sisi/pasien') }}" class="btn btn-primary">Masuk</a>
            </div>
            <div class="form-text">Lupa kata sandi?</div>
            </div>
            <div class="button">
                <a href="{{ URL('/daftar/akun/pasien') }}" class="btn btn-primary" button style="background-color:green">Daftar Akun</a>
            </div>
            <div class="button1"> <br>
                <a href="{{ URL('/laboran/login') }}" class="btn btn-success" role="button">Masuk sebagai laboran</a><br>
            </div> <br>
            <div class="button2">
                <a href="{{ URL('/dokter/login') }}" class="btn btn-dark"role="button">Masuk sebagai dokter</a>
            </div>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>