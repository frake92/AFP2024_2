<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
</head>
<body>
    <div class="container">
        <h2>Order Confirmation</h2>

        <p>Thank you for your order! Your order details:</p>

        <table>
            <tr>
                <th>Food Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            @foreach($order->items as $item)
                <tr>
                    <td>{{ $item->food->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->price }} Ft</td>
                </tr>
            @endforeach
        </table>

        <h4>Total Amount: {{ $order->total }} Ft</h4>
    </div>
</body>
</html>
