<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kosár</title>
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
                        <a class="nav-link" href="{{ route('restaurant.index') }}">Éttermek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('food.index') }}">Ételek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}">Főoldal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Kosár tartalma -->
    <div class="container mt-4">
        <h2 class="mb-4">Kosár tartalma:</h2>
        @if(session('cart') && count(session('cart')) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Étel neve</th>
                        <th>Ár</th>                        
                    </tr>
                </thead>
                <tbody>
                    @foreach(session('cart') as $id => $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['price'] }} Ft</td>   
                                                                          
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-right">
                <strong>Teljes összeg: {{ array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, session('cart'))) }} Ft</strong>
            </div>

            <div class="text-right mt-3">
                <a href="{{ route('food.checkout') }}" class="btn btn-primary">Vásárlás</a>
                <a href="{{ route('food.clearCart') }}" class="btn btn-danger">Kosár ürítése</a>
            </div>
        @else
            <p>A kosár üres.</p>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
