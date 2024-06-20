@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Order</h1>

    <form method="post" action="{{ route('orders.update',[$order->id, $order->seat_id]) }}">
        @csrf
        @method('PUT')

        <label for="nome">Customer Name:</label>
        <input type="text" id="nome" name="nome" required value="{{ $order->nome }}">

        <label for="quantita">Order Details:</label>
        <textarea id="quantita" name="quantita" required>{{ $order->quantita }}</textarea>

        <button type="submit">Save Changes</button>
        <a href="{{ route('orders.index', $order->seat_id) }}" class="btn btn-primary">Back to Orders</a>
    </form>
</div>
@endsection