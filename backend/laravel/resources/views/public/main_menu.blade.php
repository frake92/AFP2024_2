<div class="container">
<script>
    function showMessage() {
        alert("Fejlesztés alatt!");
    }
</script>

    <a class="navbar-brand d-flex align-items-center" href="#">
        <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon">
            <!-- SVG ikon -->
        </span>
        <span>HuDora</span>
    </a>
    <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
        <span class="visually-hidden">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navcol-2">
        <ul class="navbar-nav ms-auto">
            @guest
                <!-- Ha a felhasználó nincs bejelentkezve -->
                <li class="nav-item"><a class="nav-link active" href="/belepes">Bejelentkezés</a></li>
                <li class="nav-item"><a class="nav-link" href="/regisztracio">Regisztráció</a></li>
                
            @endguest

            @auth
                <!-- Ha a felhasználó be van jelentkezve -->
                <li class="nav-item"><a class="nav-link" href="{{route('profil.edit', ['user' => Auth::user()->id])}}">Profil módosítás</a></li>
                @if (Auth::check())
                <li class="nav-item">
    <a class="nav-link" href="#" onclick="showMessage()">Rendeléseim</a>
</li>

@endif

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Kijelentkezés</a>
                </li>                
            @endauth
        </ul>
        <!-- Rejtett kijelentkezés form -->
        <form method="POST" action="{{ route('logout') }}" style="display: none;" id="logout-form">
            @csrf
        </form>
    </div>
</div>
