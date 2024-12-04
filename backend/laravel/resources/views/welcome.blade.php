@extends('public.main_layout')
@section('dynamic_content')
    @if (Auth::check() && Auth::user()->role_id == 2)
        <script>
            window.location.href = "{{ route('futar') }}";
        </script>
    @endif
    @if (Auth::check() && Auth::user()->role_id == 3)
        <script>
            window.location.href = "{{ route('WelcomeAdmin') }}";
        </script>
    @endif

    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>HuDora kínálatai:</h2>
            </div>
        </div>

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
@endsection