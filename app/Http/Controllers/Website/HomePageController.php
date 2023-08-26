<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home() {

        $page_title = "Chax Thekingmaker";

        return view('website.pages.index', compact('page_title'));
    }


    public function test() {

        $user = Order::with('user')->where('order_id', '92281')->first();

        dd($user->user);
    }


}
