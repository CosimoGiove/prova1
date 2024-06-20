<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tavoli</h1>
<ul>
    @foreach($seats as $seat)
        <li>{{ $seat->name }} ({{ $seat->user->name }})
            (Numero {{ $seat->numero_tavolo }})
            <form action="{{ route('seats.destroy', $seat) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Elimina</button>
                <a href="{{ route('orders.create', $seat) }}">Create Order</a>
            </form>
        </li>
    @endforeach
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
</ul>
<a href="{{ route('seats.create') }}">Crea nuovo tavolo</a>


</body>
</html>