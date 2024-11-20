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
        <form action="POST" action="{{ route('user.register') }}">
        @csrf
            <div class="input-group"><input type="text" name="first_name" id="first_name" placeholder="Keresztnév" required></div>
            <div class="input-group"><input type="text" name="last_name" id="last_name" placeholder="Vezetéknév" required></div>
            <div class="input-group"><input type="email" name="email" id="email" placeholder="E-mail cím" required></div>
            <div class="input-group"><input type="tel" id="phone" name="phone" pattern="[0-9]{2}[0-9]{2}[0-9]{3}[0-9]{4}" placeholder="Telefonszám" required></div>
            <div class="input-group"><input type="password" id="password" name="password" placeholder="Jelszó" required></div>
            <button type="submit">Regisztáció</button>
        </form>
    </div>
</body>
</html>