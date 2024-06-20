<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Seat;
use App\Models\Order;



class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        $seats = Seat::all();
        $orders = Order::all(); // Retrieve all orders
        return view('welcome', compact('seats', 'orders'));


    }
}
