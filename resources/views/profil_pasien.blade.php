<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BALAB</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/profil_pasien.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        body {
            background-image: url(/assets/images/background.png);
            background-size: cover;
            background-repeat: no-repeat;
        }

        input[type=text],
        textarea {
            width: 95%;
            padding: 7px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        input[type="submit"] {
            width: 18%;
        }

        input[type="file"] {
            width: 18%;
            border-radius: 0%;
        }

        .drop-zone {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            padding: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-family: "Quicksand", sans-serif;
            font-weight: 500;
            font-size: 20px;
            cursor: pointer;
            color: #cccccc;
            border: 2px solid;
        }

        .drop-zone--over {
            border-style: solid;
        }

        .drop-zone__input {
            display: none;
        }

        .drop-zone__thumb {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            overflow: hidden;
            background-color: #cccccc;
            background-size: cover;
            position: relative;
        }

        .drop-zone__thumb::after {
            content: attr(data-label);
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 5px 0;
            color: #ffffff;
            background: rgba(0, 0, 0, 0.75);
            font-size: 14px;
            text-align: center;
        }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ URL('/Home/pasien')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('/bantuan')}}">Bantuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('/tentang/kami')}}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('/sisi/pasien')}}">Hasil Laboratorium</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr class="mt-0 mb-4">
    <form action='/Profil/pasien' method='post' enctype="multipart/form-data">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <span class="drop-zone__prompt  col-10 ">
                            @if(isset($post[0]->pasien->uploadGambar))
                            <div class="drop-zone offset-md-2 rounded-circle justify-content-center">
                                <img src="{{asset('storage/' . $post[0]->pasien->uploadGambar)}}" alt="{{$post[0]->pasien->nama}}" width="200" height="200" class="justify-content-center rounded-circle">
                            </div>
                            @else
                            <div class="drop-zone offset-md-2 rounded-circle justify-content-center">
                            @endif

                                {{-- <i class="bi bi-arrow-down">Upload Profil</i> --}}


                        </span>
                        <input type="file" class="drop-zone__input" name="uploadGambar">
                    </div><br>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button" style="font-family: 'Ubuntu', sans-serif;">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form method="post" action="/Profil/pasien">
                        @csrf
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if(session()->has('update'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{session('update')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername" style="font-family: 'Ubuntu', sans-serif;">Username</label>
                            <input name="nama" class="form-control" id="inputUsername" type="text" placeholder="Masukkan username" style="width: 42.5rem; font-family: 'Ubuntu', sans-serif;" @if($post[0]->pasien)
                            value="{{$post[0]->pasien->nama}}"
                            @else value="{{$post[0]->name}}"
                            @endif>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName" style="font-family: 'Ubuntu', sans-serif;">Nama awal</label>
                                <input name="namaAwal" class="form-control" id="inputFirstName" type="text" placeholder="Masukkan nama awal Anda" style="font-family: 'Ubuntu', sans-serif;" @if($post[0]->pasien)
                                value="{{$post[0]->pasien->namaAwal}}"
                                @else value="{{$post[0]->namaAwal}}"
                                @endif>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName" style="font-family: 'Ubuntu', sans-serif;">Nama akhir</label>
                                <input name="namaAkhir" class="form-control" id="inputLastName" type="text" placeholder="Masukkan nama akhir Anda" style="width: 20.7rem; font-family: 'Ubuntu', sans-serif;" @if($post[0]->pasien)
                                value="{{$post[0]->pasien->namaAkhir}}"
                                @else value="{{$post[0]->namaAkhir}}"
                                @endif>
                            </div>
                        </div>
                        <!-- Form Group (Status Pelayanan)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputstatuspelayanan" style="font-family: 'Ubuntu', sans-serif;">Status Pelayanan</label>
                            <input name="statusPelayanan" class="form-control" id="inputstatuspelayanan" type="text" placeholder="Masukkan status pelayanan" style="width: 42.5rem; font-family: 'Ubuntu', sans-serif;" @if($post[0]->pasien)
                            value="{{$post[0]->pasien->statusPelayanan}}"
                            @else value="{{$post[0]->statusPelayanan}}"
                            @endif>
                        </div>
                        <!-- Form Group (location)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLocation" style="font-family: 'Ubuntu', sans-serif;">Lokasi</label>
                            <input name="lokasi" class="form-control" id="inputLocation" type="text" placeholder="Masukkan lokasi Anda" style="width: 42.5rem; font-family: 'Ubuntu', sans-serif;" @if($post[0]->pasien)
                            value="{{$post[0]->pasien->lokasi}}"
                            @else value="{{$post[0]->lokasi}}"
                            @endif>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress" style="font-family: 'Ubuntu', sans-serif;">Email</label>
                            <input name="email" class="form-control" id="inputEmailAddress" type="email" placeholder="Masukkan email Anda" style="font-family: 'Ubuntu', sans-serif;" @if($post[0]->pasien)
                            value="{{$post[0]->pasien->email}}"
                            @else value="{{$post[0]->email}}"
                            @endif>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone" style="font-family: 'Ubuntu', sans-serif;">Nomor HP</label>
                                <input name="noHP" class="form-control" id="inputPhone" type="tel" placeholder="Masukkan nomor hp" style="font-family: 'Ubuntu', sans-serif;" @if($post[0]->pasien)
                                value="{{$post[0]->pasien->noHP}}"
                                @else value="{{$post[0]->noHP}}"
                                @endif>
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday" style="font-family: 'Ubuntu', sans-serif;">Tanggal lahir</label>
                                <input name="tglLahir" class="form-control" id="inputBirthday" type="date" name="birthday" placeholder="Masukkan tanggal lahir Anda" style="font-family: 'Ubuntu', sans-serif;" @if($post[0]->pasien)
                                value="{{$post[0]->pasien->tglLahir}}"
                                @else value="{{$post[0]->tglLahir}"
                                @endif>
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit" style="font-family: 'Ubuntu', sans-serif;">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>
            document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
                const dropZoneElement = inputElement.closest(".drop-zone");
                dropZoneElement.addEventListener("click", (e) => {
                    inputElement.click();
                });
                inputElement.addEventListener("change", (e) => {
                    if (inputElement.files.length) {
                        updateThumbnail(dropZoneElement, inputElement.files[0]);
                    }
                });
                dropZoneElement.addEventListener("dragover", (e) => {
                    e.preventDefault();
                    dropZoneElement.classList.add("drop-zone--over");
                });
                ["dragleave", "dragend"].forEach((type) => {
                    dropZoneElement.addEventListener(type, (e) => {
                        dropZoneElement.classList.remove("drop-zone--over");
                    });
                });
                dropZoneElement.addEventListener("drop", (e) => {
                    e.preventDefault();
                    if (e.dataTransfer.files.length) {
                        inputElement.files = e.dataTransfer.files;
                        updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
                    }
                    dropZoneElement.classList.remove("drop-zone--over");
                });
            });
            /**
             * Updates the thumbnail on a drop zone element.
             *
             * @param {HTMLElement} dropZoneElement
             * @param {File} file
             */
            function updateThumbnail(dropZoneElement, file) {
                let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");
                // First time - remove the prompt
                if (dropZoneElement.querySelector(".drop-zone__prompt")) {
                    dropZoneElement.querySelector(".drop-zone__prompt").remove();
                }
                // First time - there is no thumbnail element, so lets create it
                if (!thumbnailElement) {
                    thumbnailElement = document.createElement("div");
                    thumbnailElement.classList.add("drop-zone__thumb");
                    dropZoneElement.appendChild(thumbnailElement);
                }
                thumbnailElement.dataset.label = file.name;
                // Show thumbnail for image files
                if (file.type.startsWith("image/")) {
                    const reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = () => {
                        thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
                    };
                } else {
                    thumbnailElement.style.backgroundImage = null;
                }
            }
        </script>
</body>

</html>