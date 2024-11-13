<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Főoldal</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Articles-Cards-images.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Right-Links-icons.css') }}">
</head>

<body style="background: url('{{ asset('/assets/img/kezdolapképe.jpg') }}') center / cover no-repeat;">
    <header>
        @include('public.main_header')
    </header>

    <nav class="navbar navbar-expand-md bg-body py-3">
        @include('public.main_menu')
    </nav>
    @yield('dynamic_content')
    <footer>
        @include('public.main_footer')
    </footer>






</body>

</html>
