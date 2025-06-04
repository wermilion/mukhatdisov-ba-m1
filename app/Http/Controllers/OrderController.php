<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index(Request $request): View
    {
        $orders = Order::with('products')->get();

        return view('order.index', [
            'title' => 'Список заявок',
            'orders' => $orders,
        ]);
    }
}
