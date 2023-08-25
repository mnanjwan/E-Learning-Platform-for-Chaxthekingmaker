<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class PaymentPageController extends Controller
{
    public function index($order_id) {

        $order = Order::where('order_id', $order_id)->first();
        
        return view('website.pages.payment', compact('order'));
    }
}
