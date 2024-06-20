@extends('layouts.app')

@section('content')
<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Order Details</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->nome }}</td>
                <td>{{ $order->quantita }}</td>
                <td>{{ $order->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('/') }}" class="btn btn-primary">Back to Seats</a>
</div>
@endsection