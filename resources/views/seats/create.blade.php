@extends('layouts.app')
@section('content')
<div class="contenitoreordine">
    <div class="text-center bordoimmagine mt-5 mb-5">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3VK4tX_VGts66_mnK630LVu3-nHNwCpzhkQ&s"
            alt="">
    </div>
<h1 class="creatavolo text-center">Crea un  nuovo tavolo</h1>
<form method="post" action="{{ route('seats.store') }}">
    @csrf
    <div class="d-flex creazionetavolo">
        <div>
            <label for="name">Nome del tavolo:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="numero_tavolo">numero del tavolo:</label>
            <input type="number" id="numero_tavolo" name="numero_tavolo">
           </div>
    </div>
    <div class="bottoneinvio">
        <button class="btn btn-success" type="submit">Crea tavolo</button>
    </div>
   
</form>
</div>

@endsection