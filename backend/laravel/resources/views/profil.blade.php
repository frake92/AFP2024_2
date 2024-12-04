<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Szerkesztése</title>
</head>
<body>
    <div class="container">
        <a href="{{route('welcome')}}">Főoldal</a>
        <h1>Profil Szerkesztése</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form method="POST" action="{{route('profil.update', ['user' => $user])}}">
    @csrf
    @method('PUT')

    <div class="input-group">
        <label for="first_name">Keresztnév</label>
        <input type="text" name="first_name" id="first_name" value="{{$user->first_name}}" required>
    </div>

    <div class="input-group">
        <label for="last_name">Vezetéknév</label>
        <input type="text" name="last_name" id="last_name" value="{{$user->last_name}}" required>
    </div>

    <div class="input-group">
        <label for="email">E-mail cím</label>
        <input type="email" name="email" id="email" value="{{$user->email}}" required>
    </div>

    <div class="input-group">
        <label for="phone">Telefonszám</label>
        <input type="tel" id="phone" name="phone" value="{{$user->phone}}" pattern="[0-9]{2}[0-9]{2}[0-9]{3}[0-9]{4}" required>
    </div>

    <div class="input-group">
        <label for="password">Új jelszó</label>
        <input type="password" id="password" name="password" placeholder="Hagyja üresen, ha nem változtat" autocomplete="new-password">
    </div>

    <div class="input-group">
        <label for="password_confirmation">Jelszó megerősítése</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Jelszó megerősítése" autocomplete="new-password">
    </div>

    <!-- Address fields -->
    <div class="input-group">
        <label for="postal_code">Irányítószám</label>
        <input type="text" name="postal_code" id="postal_code" value="{{$user->address->postal_code ?? ''}}" required>
    </div>

    <div class="input-group">
        <label for="city">Város</label>
        <input type="text" name="city" id="city" value="{{$user->address->city ?? ''}}" required>
    </div>

    <div class="input-group">
        <label for="street">Utca</label>
        <input type="text" name="street" id="street" value="{{$user->address->street ?? ''}}" required>
    </div>

    <div class="input-group">
        <label for="house_number">Házszám</label>
        <input type="text" name="house_number" id="house_number" value="{{$user->address->house_number ?? ''}}" required>
    </div>

    <button type="submit">Mentés</button>
</form>


    </div>
</body>
</html>
