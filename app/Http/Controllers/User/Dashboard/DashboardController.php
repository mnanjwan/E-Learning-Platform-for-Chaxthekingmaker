<?php

namespace App\Http\Controllers\User\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        // $data = Order::with('user')->where('id', auth()->user()->id)->first();
        $data = Order::where('id', auth()->user()->id)->first();
        // dd($data->user->firstname);
        return view('user.dashboard.dashboard', compact('data'));
    }
}
