<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztráció</title>
    <style>
        .container {
            width: 50%;
            margin: 0 auto;
            padding-top: 20px;
        }
        .input-group, .form-group {
            margin-bottom: 15px;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
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

            <!-- Address Form -->
            <div class="form-group">
                <label for="postal_code">Irányítószám</label>
                <input type="text" name="postal_code" id="postal_code" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="city">Város</label>
                <input type="text" name="city" id="city" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="street">Utca</label>
                <input type="text" name="street" id="street" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="house_number">Házszám</label>
                <input type="text" name="house_number" id="house_number" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Regisztráció</button>
        </form>
    </div>
</body>
</html>
