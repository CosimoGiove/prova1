<?php

namespace App\Http\Controllers;
use App\Models\Seat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function index()
    {
        $seats = auth()->user()->seats;

        return view('seats.index', compact('seats'));
    }

    public function create()
    {
        $seats= Seat::all();
        return view('seats.create',compact("seats"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'numero_tavolo' => 'nullable|integer',
        ]);
        $seat = new Seat();
        $seat->name = $request->input('name');
        $seat->numero_tavolo = $request->input('numero_tavolo');
        // $seat->user_id = auth()->user()->id;
        if (auth()->check()) {
            $seat->user_id = auth()->user()->id;
        }else {
            $seat->user_id = 1; // or any other default user ID
        }
        $seat->save();
        return redirect()->route('welcome')->with('success', "Tavolo '$seat->name' creato con successo!");
    }

    public function destroy(Seat $seat)
    {
        $seat->delete();
        return redirect()->route('welcome')->with('success', 'Tavolo eliminato con successo!');
    }
    public function createOrder(Seat $seat)
    {
        return view('orders.create', compact('seat'));
    }
    public function showOrders(Seat $seat)
{
    $orders = $seat->orders()->latest()->get();

    return view('seats.orders', compact('seat', 'orders'));
}

}