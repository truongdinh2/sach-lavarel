<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class ProductController extends Controller
{
    //
    public function index() {
        $products = new Product();
        $products -> name = 'title 2';
        $products -> price = 2;
        $products -> img_link = 'content 2';
        // $products -> save();
        $products = Product::all();
        $order = Order::all();
        return view('index', ['products' => $products, 'orders' => $order]);
    }
    
}
