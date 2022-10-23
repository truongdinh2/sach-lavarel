<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function add(Request $request)
    {
        $order = new Order();
        $order->product_id = $request->id;
        $order->transaction_id = 1;
        // dd($order);
        $order->save();
    }
}
