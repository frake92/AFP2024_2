<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if (Auth::check() && Auth::user()->role_id != 3)
        <script>
            window.location.href = "{{ route('welcome') }}";
        </script>
    @endif
    <a href="{{route('restaurant.index')}}">Vissza az éttermekhez</a>
    <h1>Étterem létrehozása</h1>
    <div>
        @if($errors->any())
            <p>{{"Hiba történt! Lehet, hogy ilyen étterem már létezik!"}}</p>
        @endif
    </div>



    <form method="post" action="{{route('restaurant.store')}}">
        @csrf
        @method('post')
        <div>
            <input type="text" name="name" placeholder="Név" />
        </div>
        <div>
            <input type="text" name="address" placeholder="Cím" />
        </div>
        <div>
            <input type="text" name="phone" placeholder="Telefonszám" />
        </div>
        <div>
            <input type="text" name="description" placeholder="Leírás" />
        </div>
        <div>
            <input type="text" name="picture_path" placeholder="Kép elérési cím" />
        </div>
        <div>
            <input type="submit" value="Étterem rögzítése" />
        </div>
    </form>
</body>
</html>