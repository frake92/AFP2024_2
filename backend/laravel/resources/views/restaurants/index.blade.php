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
    <h1>Éttermek</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('restaurant.create')}}">Étterem létrehozása</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Név</th>
                <th>Cím</th>
                <th>Telefonszám</th>
                <th>Leírás</th>
                <th>Kép elérési út</th>
                <th>Módosítás</th>
                <th>Törlés</th>
            </tr>
            @foreach($restaurants as $restaurant)
                <tr>
                    <td>{{$restaurant->id}}</td>
                    <td>{{$restaurant->name}}</td>
                    <td>{{$restaurant->address}}</td>
                    <td>{{$restaurant->phone}}</td>
                    <td>{{$restaurant->description}}</td>
                    <td>{{$restaurant->picture_path}}</td>
                    <td>
                        <a href="{{route('restaurant.edit', ['restaurant' => $restaurant])}}">Módosítás</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('restaurant.destroy', ['restaurant' => $restaurant])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Törlés"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>