@extends('layouts.app')
@section('content')
    <div class="contenitoreordine text-center">

        <h1>ordine del tavolo:</h1>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Tavolo</th>
                        {{-- <th>Date</th> --}}
                        <th>descrizione</th>
                        <th>tipologia</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>
                                <span class="nomeordinee">
                                    {{ optional($order->seat)->numero_tavolo }}
                                </span>
                            </td>


                            {{-- <td>{{ $order->created_at->format('Y-m-d H:i:s') }}</td> --}}
                            <td class="bordonomeordine">
                                <span class="nomeordinee">
                                    {{ $order->nome }}

                                </span>
                            </td>


                            <td>
                                <span class="nomeordinee @if(strcasecmp($order->quantita, 'cucina') == 0) text-red @elseif(strcasecmp($order->quantita, 'pizzeria') == 0) text-green @endif"> 
                                    {{ $order->quantita }}
                                </span>

                            </td>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('welcome') }}">indeitro</a>

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
