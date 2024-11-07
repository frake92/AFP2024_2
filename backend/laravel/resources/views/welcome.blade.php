@extends('public.main_layout')
@section('dynamic_content')
    <div class="container py-4 py-xl-5">
        <div class="row mb-5" style="background: var(--bs-body-bg);">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>HuDora kínálatai:</h2>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            @foreach ($restaurants as $restaurant)
            <div class="col">
                <div class="card">
                    <img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="{{ $restaurant->image_url }}">
                    <div class="card-body p-4">
                        <h4 class="card-title">{{ $restaurant->name }}</h4>
                        <p class="card-text">{{ $restaurant->description }}</p>
                        <div class="d-flex">
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
@endsection