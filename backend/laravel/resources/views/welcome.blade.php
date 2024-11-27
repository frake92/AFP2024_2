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
        <div class="row mb-5" style="background: var(--bs-body-bg);">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>HuDora kínálatai:</h2>
            </div>
        </div>
        
    </div>
    
@endsection