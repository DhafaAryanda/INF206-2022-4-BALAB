<!doctype html>
<html lang="en">

<head>
    <meta charet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>BALAB</title>
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
                                <a class="nav-link" href="{{ URL('/profil/laboran')}}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL('/tentang/kami') }}">Tentang</a>
                            </li>
                        </ul>
                    </div>
                    <div class="container-fluid">
                        <a class="navbar-brand"></a>
                        <form class="d-flex" style="width: 300px; margin-left: 490px; top:-20;">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-dark" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="my-5 container col-6"></div>
            <div class="accordion accordion-flush ms-5" id="accordionFlushExample" style="width: 650px">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Bagaimana cara mengunduh hasil lab?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit quo harum totam nam nemo excepturi dignissimos voluptatibus fugiat ad, neque reiciendis nesciunt suscipit voluptatem nulla autem ratione consequatur, esse ullam!</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Dimana dapat dilihat hasil lab?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum adipisci odio at hic deserunt illo ad quos! Aperiam error quo iusto, cum, omnis fugiat unde, sapiente facilis delectus quasi voluptatum.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Bagaimana cara kita mengetahui bahwa hasil lab sudah keluar?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quos iure omnis atque laudantium rem enim excepturi, error, voluptatum rerum dolorem! Quisquam vero quidem, nihil aliquid veniam maxime doloribus dicta?</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ URL :: asset('assets/bootstrap/list-Materi-Bootstrap/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>