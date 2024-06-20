@extends('layouts.app')
@section('content')
<h1>I miei ordini:</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Seat</th>
            {{-- <th>Date</th> --}}
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>
                    <span class="nomeordinee">
                        {{ optional($order->seat)->name }}</td>
                    </span>
                   
                {{-- <td>{{ $order->created_at->format('Y-m-d H:i:s') }}</td> --}}
                <td>
                    <span class="nomeordinee">
                        {{ $order->nome }}</td>
                    </span>
                   
                <td>
                    <span class="nomeordinee"> {{ $order->quantita }}</span>
                   
                </td>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{route("welcome")}}">indeitro</a>


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
    <h1>My Orders</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Seat</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ optional($order->seat)->name }}</td>
                    <td>{{ $order->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>{{ $order->nome }}</td>
                    <td>{{ $order->quantita }}</td>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route("welcome")}}">indeitro</a>

</body>
</html> --}}