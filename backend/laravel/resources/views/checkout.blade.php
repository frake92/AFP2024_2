    <div class="container">
        <h2>Fizetés</h2>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Étel neve</th>
                    <th>Ár</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr>
                        <td>{{ $item->food->name }}</td>
                        <td>{{ $item->food->price }} Ft</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            <h4>Összesen: {{ $totalAmount }} Ft</h4>
        </div>
        
        <form method="POST" action="{{ route('checkout.placeOrder') }}">
    @csrf
    <div class="text-right">
    <form id="order-form" action="{{ route('order.store') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-success">Vásárlás véglegesítése</button>
</form>


    </div>
</form>

    </div>