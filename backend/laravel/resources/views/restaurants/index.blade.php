<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éttermek</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Éttermek és Ételek</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('restaurant.index') }}">Éttermek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('restaurant.create') }}">Étterem létrehozása</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}">Főoldal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        @if (Auth::check() && Auth::user()->role_id != 3)
            <script>
                window.location.href = "{{ route('welcome') }}";
            </script>
        @endif

        <h1 class="mb-4">Éttermek</h1>
        <div>
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div class="mb-3">
            <a href="{{ route('restaurant.create') }}" class="btn btn-primary">Étterem létrehozása</a>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Név</th>
                    <th>Cím</th>
                    <th>Telefonszám</th>
                    <th>Leírás</th>
                    <th>Kép elérési út</th>
                    <th>Módosítás</th>
                    <th>Törlés</th>
                    <th>Ételek listázása</th>
                </tr>
            </thead>
            <tbody>
                @foreach($restaurants as $restaurant)
                    <tr>
                        <td>{{ $restaurant->id }}</td>
                        <td>{{ $restaurant->name }}</td>
                        <td>{{ $restaurant->address }}</td>
                        <td>{{ $restaurant->phone }}</td>
                        <td>{{ $restaurant->description }}</td>
                        <td>{{ $restaurant->picture_path }}</td>
                        <td>
                            <a href="{{ route('restaurant.edit', ['restaurant' => $restaurant]) }}" class="btn btn-warning btn-sm">Módosítás</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('restaurant.destroy', ['restaurant' => $restaurant]) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Törlés" class="btn btn-danger btn-sm"/>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('food.index', $restaurant->id) }}" class="btn btn-info btn-sm">Ételek listázása</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
