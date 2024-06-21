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
    <div class="creazionetavolo text-center">
        <div>
            <label for="name">Nome del tavolo:</label>
            <div>
                <input type="text" id="name" name="name">
            </div>
           
        </div>
        <div>
            <label for="numero_tavolo">numero del tavolo:</label>
            <div>
                <input type="number" id="numero_tavolo" name="numero_tavolo">
            </div>
           </div>
    </div>
    <div class="bottoneinvio text-center">
        <button class="btn btn-success" type="submit">Crea tavolo</button>
    </div>
   
</form>
</div>

@endsection