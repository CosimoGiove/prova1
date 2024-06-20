{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Seat {{ $seat->name }}</h1>

<h2>Orders:</h2>
<ul>
    @foreach($orders as $order)
        <li>{{ $order->nome }} - {{ $order->quantita}}</li>
    @endforeach
</ul>

<a href="{{ route('orders.create', $seat->id) }}">Create new order</a>

// resources/views/orders/create.blade.php

<h1>Create new order for seat {{ $seat->nome }}</h1>

<form method="POST" action="{{ route('orders.store', $seat->id) }}">
    @csrf

    <label for="nome">Customer Name:</label>
    <input type="text" id="customer_name" name="nome" required>

    <label for="quantita">Order Details:</label>
    <textarea id="quantita" name="quantita" required></textarea>

    <button type="submit">Create Order</button>
</form>
</body>
</html> --}}