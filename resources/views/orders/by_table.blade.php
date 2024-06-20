<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ordini per tavolo</h1>

@foreach($seats as $seat)
    <h2>Tavolo {{ $seat->name }} ({{ $seat->numero_tavolo }})</h2>
    <ul>
        @foreach($seat->orders as $order)
            <li>Ordine #{{ $order->id }} - {{ $order->created_at }}
                {{$order->nome}} quantita : {{$order->quantita}}
            </li>
        @endforeach
    </ul>
@endforeach
<a href="{{route("dashboard")}}">ritorna alla dashboard</a>
</body>
</html>