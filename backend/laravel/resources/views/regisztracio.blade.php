<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Regisztráció</h1>
        @if ($errors->has('email'))
                <div class="alert alert-danger">
                    {{ 'Ez az e-mail cím már használatban van!' }}
                </div>
        @endif
        @if ($errors->has('phone'))
                <div class="alert alert-danger">
                    {{ 'Ez a telefonszám már használatban van!' }}
                </div>
        @endif
        <form method="POST" action="{{ route('user.regisztralas') }}">
            @csrf
            <div class="input-group">
                <input type="text" name="first_name" id="first_name" placeholder="Keresztnév" required>
            </div>
            <div class="input-group">
                <input type="text" name="last_name" id="last_name" placeholder="Vezetéknév" required>
            </div>
            <div class="input-group">
                <input type="email" name="email" id="email" placeholder="E-mail cím" required>
            </div>
            <div class="input-group">
                <input type="tel" id="phone" name="phone" pattern="[0-9]{2}[0-9]{2}[0-9]{3}[0-9]{4}" placeholder="Telefonszám" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Jelszó" required>
            </div>
            <div class="input-group">
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Jelszó megerősítése" required>
            </div>
            <button type="submit">Regisztráció</button>
        </form>
    </div>
</body>
</html>