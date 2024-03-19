<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    @vite('resources/sass/myweb.scss')

</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar bg-secondary text-uppercase border-bottom border-body fixed-top">
        <div class="container-fluid mx-0 px-0">
            <a class="navbar-brand fw-bold" href="#">My Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav fw-bold ms-auto px-5">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#bagian1">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#bagian2">Origin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#bagian2">Education</a>
                <li class="nav-item">
                    <a class="nav-link" href="#bagian3">Contact</a>
                </li>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <!--Home-->

    <div class="container text-center mt-5" id="bagian1">
        <div class="container py-5 px-4 hero">
            <div class="col-lg-3 container text-center">
                <img class="img-thumbnail" src="{{ Vite::asset('resources/images/formal.jpeg') }}" alt="image">
            </div>
            <div class="col">
                <h1 class="display-9 mb-1 fw-bold">Aditya Meilano Fatahillah</h1>
                <p class="fs-5">Mahasiswa Sistem Informasi Telkom University Surabaya</p>
            </div>
        </div>
    </div>

    <!--Origin-->

    <div class="bg-light mt-5" id="bagian2">
        <div class="container py-5 px-4">
            <div class="container text-center">
                <div class="row">

                    <div class="col mt-5 py-5">
                        <h1 class="display-9 mb-1 fw-bold py-5 mt-5">Sulawesi Tengah</h1>
                        <p class="fs-5">Berasal dari Poso Sulawesi Tengah dan besar di Kota Palu Ibukota Sulawesi
                            Tengah sampai lulus SMP. Sekarang telah menetap di Sidoarjo Jawa Timur</p>
                    </div>
                    <div class="col">
                        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/sulteng.jpg') }}"
                            alt="image">

                    </div>
                </div>
            </div>

            <!--Education-->

            <div class="bg-light mt-5" id="bagian3">
                <div class="container py-5 px-4">
                    <h2 class="mb-5 text-center fw-bold">Riwayat Pendidikan</h2>
                    <div class="card-group">
                        <div class="card">
                            <img class="img-thumbnail" src="{{ Vite::asset('resources/images/sd.jpg') }}"
                                alt="image">
                            <div class="card-body">
                                <h5 class="card-title">SDN 10 Palu</h5>
                                <p class="card-text"><small class="text-body-secondary">2010-2016</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="img-thumbnail" src="{{ Vite::asset('resources/images/smp.jpg') }}"
                                alt="image">
                            <div class="card-body">
                                <h5 class="card-title">SMP Al-Azhar Mandiri Palu</h5>
                                <p class="card-text"><small class="text-body-secondary">2016-2019</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="img-thumbnail" src="{{ Vite::asset('resources/images/sma.jpeg') }}"
                                alt="image">
                            <div class="card-body">
                                <h5 class="card-title">SMA Hangtuah 5 Sidoarjo</h5>
                                <p class="card-text"><small class="text-body-secondary">2019-2022</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="img-thumbnail" src="{{ Vite::asset('resources/images/kampus.webp') }}"
                                alt="image">
                            <div class="card-body">
                                <h5 class="card-title">Telkom University Surabaya</h5>
                                <p class="card-text"><small class="text-body-secondary">2022-Sekarang</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--footer/contact-->
            <div class="bg-secondary mt-5" id="bagian4">
                <div class="footer-container py-5 px-4" style="width: 100%">
                    <h3 class="text-center fw-bold">Personal Contact</h3>
                    <p class="text-light text-center">Email : milano@student.telkomuniversity.ac.id | Instagram :
                        @amf_gps | WhatsApp : 085341623153 | Candi-Sidoarjo</p>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
            </script>
</body>

</html>
