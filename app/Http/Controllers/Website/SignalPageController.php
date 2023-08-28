<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignalPageController extends Controller
{
    public function index()
    {
        $page_title = 'Signal Chaxthekingmaker';
        return view('website.pages.signal', compact('page_title'));
    }

    public function payment($signal, $amount){
        $page_title = 'Signal payment Chaxthekingmaker';
        

        return view('website.pages.signal_payment', compact('signal', 'amount','page_title'));
    }
}
