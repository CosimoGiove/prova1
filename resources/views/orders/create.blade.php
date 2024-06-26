@extends('layouts.app')
@section('content')
<div class="contenitoreordine">

<h1 class="tavolidue">Crea un nuovo ordine per {{ $seat->name }} - tavolo {{$seat->numero_tavolo}}</h1>

    <a href="{{route("welcome")}}"><span class="mostraordini">torna indietro</span></a>


<div class="text-center">
<form method="post" action="{{ route('orders.store', $seat->id) }}">
    @csrf

    <label for="nome">Nome/ tutto l'ordine:</label>
    <input class="formordine" type="text" id="nome" name="nome" required value="{{ old('nome') }}">

    <label for="quantita">Tipo(Cucina, Pizzeria):</label>
    <input class="formordine" type="text" id="quantita" name="quantita" required value="{{ old('quantita') }}">

    <button class="bottoneordinee btn btn-success" type="submit">Crea ordine</button>
    <a href="{{ route('orders.index', $seat->id) }}" class="btn btn-primary">Mostra ordini</a>

</form>
</div>
<h2 class="tavolidue">Ordini di  {{ $seat->name }}</h2>
<ul>
    @foreach ($orders as $order)
    <div class="tavoli">
        <li class="nomeordinee">{{ $order->nome }} - tipologia: {{ $order->quantita }}</li>
        <div class="d-flex mt-3 mb-3">
            <div>
                <a class="modifica btn btn-secondary" href="{{ route('orders.edit', [$seat, $order]) }}"><b>Modifica</b></a>
            </div>
            <div class="mx-3">
                <form action="{{ route('orders.destroy', ['seat' => $seat->id, 'order' => $order->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger spazio">Cancella</button>
                </form>
            </div>
        </div>

        {{-- <a class="modifica btn btn-secondary" href="{{ route('orders.edit', [$seat, $order]) }}"><b>Modifica</b></a> --}}
        {{-- <a href="{{ route('seats.showOrders', $seat->id) }}" class="btn btn-primary">Show Orders</a> --}}
        
            {{-- <form action="{{ route('orders.destroy', ['seat' => $seat->id, 'order' => $order->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger spazio">Cancella</button>
            </form> --}}
       
      
        </div>
    @endforeach
</ul>
</div>
@endsection
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create new order for seat {{ $seat->name }}</h1>
    <a href="{{route("welcome")}}">indeitro</a>

    <form method="post" action="{{ route('orders.store', $seat->id) }}">
        @csrf
    
        <label for="nome">Customer Name:</label>
        <input type="text" id="nome" name="nome" required value="{{ old('nome') }}">
    
        <label for="quantita">Order Details:</label>
        <textarea id="quantita" name="quantita" required>{{ old('quantita') }}</textarea>
    
        <button type="submit">Create Order</button>
        <a href="{{ route('orders.index', $seat->id) }}" class="btn btn-primary">View Orders</a>
    
    </form>
    <h2>Orders for Seat {{ $seat->name }}</h2>
    <ul>
        @foreach ($orders as $order)
            <li>{{ $order->nome }} - Quantity: {{ $order->quantita }}</li>
            <a href="{{ route('orders.edit', [$seat, $order]) }}">modifica</a>
            <a href="{{ route('seats.showOrders', $seat->id) }}" class="btn btn-primary">Show Orders</a>
            <form action="{{ route('orders.destroy', ['seat' => $seat->id, 'order' => $order->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        @endforeach
    </ul>
</body>
</html> --}}