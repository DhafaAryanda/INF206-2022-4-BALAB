<!DOCTYPE html>
<html lang="en">

<head>
    <meta charet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>BALAB</title>
    <link rel="stylesheet" href="{{URL :: asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL :: asset('assets/styles/login-akun_pasien.css')}}">
    <link rel="stylesheet" href="{{URL :: asset('assets/styles/styles.css')}}">
    <link rel="stylesheet" href="{{URL :: asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL :: asset('assets/styles/akun_pasien.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@600&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <section class="daftar_akun">
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


        <form action="/daftar/akun/pasien" method="post">
            @csrf
            <br>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" style="margin-left: 20px; font-family: 'Ubuntu', sans-serif; font-size: 17px;">No BPJS Pasien</label>
                <input type="text" class="form-control" style="width: 355px; margin-left:20px;" id="exampleInputEmail1" name="noBPJS">
            </div>
            <div class="mb-3">
                <label for="exampleInputUsername1" class="form-label" style="margin-left: 20px; font-family: 'Ubuntu', sans-serif; font-size: 17px;">Username</label>
                <input type="username" class="form-control" style="width: 355px; margin-left:20px;" id="exampleInputUsername1" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputID1" class="form-label" style="margin-left: 20px; font-family: 'Ubuntu', sans-serif; font-size: 17px;">Email</label>
                <input type="email" class="form-control" style="width: 355px; margin-left:20px;" id="exampleInputID1" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="margin-left: 20px; font-family: 'Ubuntu', sans-serif; font-size: 17px;">Password</label>
                <input type="password" class="form-control" style="width: 355px; margin-left:20px;" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" style="margin-left: -2px;" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1" style="margin-left: 8px; font-family: 'Ubuntu', sans-serif; font-size: 17px;">Ingat saya</label>
            </div>
            <button class="btn btn-primary " style="background-color:green; margin-left: 10.2rem; font-family: 'Ubuntu', sans-serif; font-size: 17px;">Daftar</button>
        </form>
    </section>
</body>

</html>