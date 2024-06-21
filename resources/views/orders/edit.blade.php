@extends('layouts.app')

@section('content')
    <div class="contenitoreordine">
        <div class="container">
            <h1>modifica ordine:</h1>

            <form method="post" action="{{ route('orders.update', [$order->id, $order->seat_id]) }}">
                @csrf
                @method('PUT')
                <div class="d-flex modificaordine">
                    <div class="ordinenome">
                        <label for="nome">nome:</label>
                        <input class="ordinenome1" type="text" id="nome" name="nome" required
                            value="{{ $order->nome }}">
                    </div>
                    <div class="tiplogiaordine">
                        <label for="quantita">tipologia:</label>
                        <input type="text" id="quantita" name="quantita" required value="{{ $order->quantita }}">
                    </div>
                    <div>
                        <button class="salvacamb btn btn-success" type="submit">Salva cambiamenti</button>
                        <a href="{{ route('orders.index', $order->seat_id) }}" class="btn btn-primary">Ritorna agli
                            ordini</a>
                    </div>
                </div>



            </form>
        </div>
    </div>
@endsection
