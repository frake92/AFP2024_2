<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ételek listája</title>
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
                    <!--
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Főoldal</a>
                    </li>
                    -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('restaurant.index') }}">Éttermek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('food.create') }}">Étel hozzáadása</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <!-- Étterem kiválasztása -->
        <form action="{{ route('food.index') }}" method="GET" class="mb-4">
            <div class="form-group">
                <label for="restaurant_id">Válassz éttermet</label>
                <select name="restaurant_id" class="form-control" id="restaurant_id" onchange="this.form.submit()">
                    <option value="">-- Válassz éttermet --</option>
                    @foreach($restaurants as $restaurant)
                    <option value="{{ $restaurant->id }}" {{ request('restaurant_id') == $restaurant->id ? 'selected' : '' }}>
                        {{ $restaurant->name }}
                    </option>
                    @endforeach
                </select>
            </div>
        </form>

        @if(isset($selectedRestaurant))
        <h2 class="mb-4">{{ $selectedRestaurant->name }} étterem ételei:</h2>

        <<<<<<< HEAD
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>Étel neve</th>
                    <th>Ár</th>
                    <th>Leírás</th>
                    <th>Kép</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($selectedRestaurant->foods as $food)
                <tr>
                    <td>{{ $food->name }}</td>
                    <td>{{ $food->price }} Ft</td>
                    <td>{{ $food->description }}</td>
                    <td>
                        @if($food->picture_path)
                        <img src="{{ $food->picture_path }}" alt="{{ $food->name }}" style="width: 100px;">
                        @else
                        Nincs kép
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Nincs étel az étteremhez.</td>
                </tr>
                @endforelse
            </tbody>
            </table>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Étel neve</th>
                        <th>Ár</th>
                        <th>Leírás</th>
                        <th>Kép</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($selectedRestaurant->foods as $food)
                    <tr>
                        <td>{{ $food->name }}</td>
                        <td>{{ $food->price }} Ft</td>
                        <td>{{ $food->description }}</td>
                        <td>
                            @if($food->picture_path)
                            <img src="{{ $food->picture_path }}" alt="{{ $food->name }}" style="width: 100px;">
                            @else
                            Nincs kép
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('food.addToCart', $food->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">Kosárba</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('food.addToCart', $food->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">Kosárba</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Nincs étel az étteremhez.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            @else
            <p>Kérlek, válassz egy éttermet a listából!</p>
            @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>