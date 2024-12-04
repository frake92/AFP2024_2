<div class="container">
    <h2>A Kosaram</h2>

    <div id="cart-message">
        @if(empty($cartItems))
            <p>A kosarad üres.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Étel neve</th>
                        <th>Ár</th>
                        <th>Eltávolítás</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $item)
                        <tr>
                            <td>{{ $item->food->name }}</td>
                            <td>{{ $item->food->price }} Ft</td>
                            <td>
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eltávolítás</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Calculate total price -->
            <div class="text-right">
                <h4>Összesen: {{ $cartItems->sum(fn($item) => $item->food->price) }} Ft</h4>
            </div>
        @endif
    </div>
    
    <!-- Proceed to checkout button -->
    @if(!$cartItems->isEmpty())
        <div class="text-right">
            <a href="{{ route('checkout') }}" class="btn btn-primary">Tovább a fizetéshez</a>
        </div>
    @endif
</div>
