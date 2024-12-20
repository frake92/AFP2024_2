<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Étterem Törlés</title>
    <link rel="stylesheet" href="{{ asset('assetsEtteremTorles/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsEtteremTorles/css/Articles-Cards-images.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsEtteremTorles/css/logo.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsEtteremTorles/css/Navbar-Centered-Links-icons.css') }}">
</head>

<body style="background: url('{{ asset('assetsEtteremTorles/img/medical-elements-assortment-blue-cement-background-with-copy-space_23-2148502919.jpg') }}') top / cover no-repeat;">
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
            <div class="collapse navbar-collapse" id="navcol-3">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Étterem eltávolítása</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Étterem hozzáadása</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Felhasználók</a></li>
                </ul>
                <a class="nav-link" href="#" style="margin-right: 15px;">Főoldal</a>
                <img src="{{ asset('assetsEtteremTorles/img/4919853.png') }}" width="79" height="70" style="margin-right: 15px;">
                <button class="btn btn-primary" type="button">Kijelentkezés</button>
            </div>
        </div>
    </nav>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5" style="background: var(--bs-body-bg);border-radius: 50px;">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="w-lg-50" style="font-size: 32px;">Étterem eltávolítása</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            @foreach($restaurants as $restaurant)
                <div class="col">
                    <div class="card">
                        <img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="{{ $restaurant->image_url }}" alt="{{ $restaurant->name }}">
                        <div class="card-body p-4">
                            <h4 class="card-title">{{ $restaurant->name }}</h4>
                            <p class="card-text">{{ $restaurant->description }}</p>
                            <form method="POST" action="{{ route('restaurants.destroy', $restaurant->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-primary" type="submit">Törlés</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ asset('assetsEtteremTorles/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
