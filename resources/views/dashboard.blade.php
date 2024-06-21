@extends('layouts.admin')

@section('content')
<div class="contenitoreordine contenitoreimmaginedash">
    <div class="container">
        <div class="text-center bordoimmagine mt-2 mb-2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3VK4tX_VGts66_mnK630LVu3-nHNwCpzhkQ&s"
                alt="">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Benvenuto nella tua area di amministrazione!') }}
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex mt-3">
            <div class="mx-3">
                <a class="btn btn-success" href="{{ route('seats.create') }}">Crea un nuovo tavolo</a>
            </div>
            <div>
                <a class="btn btn-secondary" href="{{route("orders.by_table")}}">Guarda tutti gli ordini</a>  
            </div>
        </div>
    </div>
</div>
@endsection
