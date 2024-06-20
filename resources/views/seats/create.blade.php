@extends('layouts.app')
@section('content')
<h1>Crea un  nuovo tavolo</h1>
<form method="post" action="{{ route('seats.store') }}">
    @csrf
    <div class="d-flex creazionetavolo">
        <div>
            <label for="name">Nome del tavolo:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="numero_tavolo">numero del tavolo:</label>
            <input type="text" id="numero_tavolo" name="numero_tavolo">
           </div>
    </div>
    <div class="btn btn-primary">
        <button type="submit">Crea tavolo</button>
    </div>
   
</form>

@endsection