<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seat;
use App\Models\Order;


class OrderController extends Controller
{
    public function getOrdersBySeat($seat_id)
    {
        $orders = Order::where('seat_id', $seat_id)->get();
        return view('orders.index', compact('orders'));
    }

    public function show(Seat $seat)
{
    $orders = $seat->orders; // retrieve orders for the current seat
    return view('seats.show', compact('seat', 'orders'));
}

public function createOrder(Seat $seat)
{
    // return view('orders.create', ['seat' => $seat]);
    //  or return view('orders.create')->with('seat', $seat);
    $orders = Order::where('seat_id', $seat->id)->get();
    return view('orders.create', compact('seat', 'orders'));
  
 
}

public function store(Request $request, Seat $seat)
{
    $request->validate([
        'nome' => 'required|string|max:255',
        'quantita' => 'required|string|max:100',
    ]);

    $order = new Order();
    $order->nome = $request->input('nome');
    $order->quantita = $request->input('quantita');
    $order->seat_id = $seat->id;
    $order->save();

    return redirect()->route('orders.create', $seat->id)->with('success', 'Order created successfully!');
    
}
public function edit(Seat $seat,Order $order)
{
    return view('orders.edit', compact('order'));
}
public function update(Request $request, Order $order)
{
    $request->validate([
        'nome' => 'required|string|max:255',
        'quantita' => 'required|string|max:100',
    ]);

    $order->nome = $request->input('nome');
    $order->quantita = $request->input('quantita');
    $order->save();

    return redirect()->route('orders.create', $order->seat_id)->with('success', 'Order updated successfully!');
}
public function destroy(Seat $seat, Order $order)
{
    // $order is now an instance of App\Models\Order
    $order->delete();

    return redirect()->route('orders.create', $seat)->with('success', 'Order deleted successfully!');
}
public function showOrdersByTable()
{
    $seats = Seat::with('orders')->get();

    return view('orders.by_table', compact('seats'));
}

}