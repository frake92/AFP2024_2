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
    <h1>Étterem módosítása</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>



    <form method="post" action="{{route('restaurant.update', ['restaurant' => $restaurant])}}">
        @csrf
        @method('put')
        <div>
            <input type="text" name="name" placeholder="Név" value="{{$restaurant->name}}"/>
        </div>
        <div>
            <input type="text" name="address" placeholder="Cím" value="{{$restaurant->address}}"/>
        </div>
        <div>
            <input type="text" name="phone" placeholder="Telefonszám" value="{{$restaurant->phone}}"/>
        </div>
        <div>
            <input type="text" name="description" placeholder="Leírás" value="{{$restaurant->description}}"/>
        </div>
        <div>
            <input type="text" name="picture_path" placeholder="Kép elérési cím" value="{{$restaurant->picture_path}}"/>
        </div>
        <div>
            <input type="submit" value="Étterem módosítása" />
        </div>
    </form>
</body>
</html>