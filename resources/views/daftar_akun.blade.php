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
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                <li class="nav-item">
                                        <a class="nav-link" href="#">Tentang</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="#">Bantuan</a>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <form class="form">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">Username</label>
                    <input type="username" class="form-control" id="exampleInputUsername1">
                </div>
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
                    <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                </div>
                <div class="button">
                    <button type="submit" class="btn btn-primary" button style="background-color:green">Daftar</button>
                </div>
            </form>
        </section>
    </body>
</html>