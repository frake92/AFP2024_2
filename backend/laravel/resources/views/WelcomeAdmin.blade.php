<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FőoldalAdmin</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Articles-Cards-images.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Right-Links-icons.css') }}">
</head>

<body style="background: url('{{ asset('assets/img/kezdolapképe.jpg') }}') center / cover no-repeat;">
    <nav class="navbar navbar-expand-md bg-body py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                        <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"></path>
                        <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                    </svg>
                </span>
                <span>HuDora</span>
            </a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Főoldal</a></li>
                </ul>
                <a href="{{ route('restaurant.index') }}" class="btn btn-success ms-md-2">Éttermek kezelése</a>
                <a href="{{ route('food.create') }}" class="btn btn-primary">Étel hozzáadása</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Kijelentkezés</button>
                </form>
                <!-- Az étterem nevére kattintva a hozzá tartozó ételek listáját nézhetjük meg -->



            </div>
        </div>
    </nav>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5" style="background: var(--bs-body-bg);">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>HuDora kínálatai:</h2>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <!-- Itt jelenhetnek meg az éttermek -->
            <div class="row">
                @forelse ($restaurants as $restaurant)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if ($restaurant->picture_path)
                        <img src="{{ $restaurant->picture_path }}" class="card-img-top" alt="{{ $restaurant->name }}">
                        @else
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Nincs kép">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $restaurant->name }}</h5>
                            <p class="card-text">
                                <strong>Cím:</strong> {{ $restaurant->address }}<br>
                                <strong>Telefonszám:</strong> {{ $restaurant->phone }}<br>
                                <strong>Leírás:</strong> {{ Str::limit($restaurant->description, 100) }}
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            @if (Auth::check())
                            <a href="{{ route('food.index', ['restaurant_id' => $restaurant->id]) }}" class="btn btn-primary">Ételek megtekintése</a>
                            @else
                            <button class="btn btn-secondary" disabled>Jelentkezz be az ételek megtekintéséhez</button>
                            @endif
                        </div>

                    </div>
                </div>
                @empty
                <div class="col-12 text-center">
                    <p>Nincs megjeleníthető étterem.</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>