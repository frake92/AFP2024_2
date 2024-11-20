<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>AdminFelület</title>
    <link rel="stylesheet" href="{{ asset('assetsAdminEtteremAdd/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsAdminEtteremAdd/css/logo.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsAdminEtteremAdd/css/Navbar-Centered-Links-icons.css') }}">
</head>

<body style="background: url('{{ asset('assetsAdminEtteremAdd/img/hatter.jpg.jpg') }}') center / cover no-repeat;">
    <nav class="navbar navbar-expand-md bg-body py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                        <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a.5.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"></path>
                        <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                    </svg>
                </span>
                <span>HuDora</span>
            </a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3">
                <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-3">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Étterem hozzáadása</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Éttermek eltávolitása</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Felhasználók</a></li>
                </ul>
                <a class="nav-link" href="#" style="margin-right: 15px;">Főoldal</a>
                <img class="mt-xxl-0 ms-xxl-0" src="{{ asset('assetsAdminEtteremAdd/img/4919853.png') }}" width="79" height="70" style="margin-right: 15px;">
                <button class="btn btn-primary" type="button">Kijelentkezés</button>
            </div>
        </div>
    </nav>

    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5 px-xl-5">
                <div class="col-md-8 col-xl-6 col-xxl-6 text-center mx-auto px-0" style="border-style: solid;">
                    <h2 class="px-5 mx-0">Étterem felvétel</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <form class="text-center" method="POST" action="{{ route('restaurant.store') }}">
                                @csrf
                                <div class="mb-3">
                                    <input class="form-control" type="text" name="name" placeholder="Étterem neve" required>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="file" name="picture" required>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" name="description" placeholder="Leírás" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary d-block w-100" type="submit">Hozzáadás</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assetsAdminEtteremAdd/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
