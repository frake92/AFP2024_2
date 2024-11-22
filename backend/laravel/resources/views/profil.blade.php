<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Szerkesztése</title>
</head>
<body>
    <div class="container">
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

        <form method="PUT" action="{{ route('user.profile.update') }}">
            @csrf
            @method('PUT')

            <div class="input-group">
                <input type="text" name="first_name" id="first_name" 
                       value="{{ old('first_name', $user->first_name) }}" 
                       placeholder="Keresztnév" required>
            </div>

            <div class="input-group">
                <input type="text" name="last_name" id="last_name" 
                       value="{{ old('last_name', $user->last_name) }}" 
                       placeholder="Vezetéknév" required>
            </div>

            <div class="input-group">
                <input type="email" name="email" id="email" 
                       value="{{ old('email', $user->email) }}" 
                       placeholder="E-mail cím" required>
            </div>

            <div class="input-group">
                <input type="tel" id="phone" name="phone" 
                       value="{{ old('phone', $user->phone) }}" 
                       pattern="[0-9]{2}[0-9]{2}[0-9]{3}[0-9]{4}" 
                       placeholder="Telefonszám" required>
            </div>

            <div class="input-group">
                <input type="password" id="password" name="password" 
                       placeholder="Új Jelszó (hagyja üresen, ha nem változtat)" autocomplete="new-password">
            </div>

            <div class="input-group">
                <input type="password" id="password_confirmation" name="password_confirmation" 
                       placeholder="Jelszó megerősítése" autocomplete="new-password">
            </div>

            <button type="submit">Mentés</button>
        </form>
    </div>
</body>
</html>
