<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Futár</title>
    <link rel="stylesheet" href="{{ asset('assetsFutar/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsFutar/css/Navbar-With-Button-icons.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-md bg-body py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                        <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"></path>
                        <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                    </svg>
                </span>
                <span>HuDora</span>
            </a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Futár</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Főoldal</a></li>
                </ul>
                <button class="btn btn-primary" type="button">Kijelentkezés</button>
            </div>
        </div>
    </nav>
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5">
                        <div class="card-body p-sm-5">
                            <h2 class="text-center mb-4">Futár</h2>
                            <div class="card">
                                <div class="card-body" style="border-style: solid;">
                                    <h4 class="card-title" style="border-radius: 10px; border: 2px solid var(--bs-emphasis-color); text-align:center;">
                                        Megrendelés száma:
                                    </h4>
                                    <h4 class="card-title" style="border-radius: 10px; border: 2px solid var(--bs-emphasis-color); text-align:center;">
                                        Rendelő neve:
                                    </h4>
                                    <h4 class="card-title" style="border-radius: 10px; border: 2px solid var(--bs-emphasis-color); text-align:center;">
                                        Rendelő telefonszáma:
                                    </h4>
                                    <h4 class="card-title" style="border-radius: 10px; border: 2px solid var(--bs-emphasis-color); text-align:center;">
                                        Rendelő címe:
                                    </h4>
                                </div>
                            </div>
                            <form method="post" action="">
                                @csrf
                                <div>
                                    <button class="btn btn-primary d-block w-100" type="submit">Átadva/következő</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assetsFutar/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
