<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
</head>
<body>
    <div class="container">
        <h1>My Orders</h1>
        
        <table>
    <thead>
        <tr>
            <th>Order ID</th>
            <th>Status</th>
            <th>Order Date</th>
            <th>Comment</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ $order->order_date }}</td>
                <td>{{ $order->comment }}</td>
            </tr>
        @endforeach
    </tbody>
</table>



        @empty
            <p>No orders found.</p>
        @endforelse
    </div>
</body>
</html>
