@extends('layouts.admin')
@section('content')
    <div class="contenitoreordine">
        <h1 class="text-center">Ordini suddivisi per tavolo</h1>

        @foreach ($seats as $seat)
            <div class="tuttitavoli">
                <h2>Tavolo {{ $seat->name }} ({{ $seat->numero_tavolo }})</h2>
                <ul>
                    @foreach ($seat->orders as $order)
                        <li>
                            <div>
                                <b class="fs-2">Nome:</b>
                                <span class="fs-4">{{ $order->nome }}</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
        <a href="{{ route('dashboard') }}">ritorna alla dashboard</a>
    </div>
@endsection
