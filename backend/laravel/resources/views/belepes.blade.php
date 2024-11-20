<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Bejelentkezés</h1>
        <form method="POST" action="{{ route('user.belepes') }}">
            @csrf
            <div class="input-group">
                <input type="email" name="email" id="email" placeholder="E-mail cím" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Jelszó" required>
            </div>
            <button type="submit">Belépés</button>
        </form>
    </div>
</body>
</html>