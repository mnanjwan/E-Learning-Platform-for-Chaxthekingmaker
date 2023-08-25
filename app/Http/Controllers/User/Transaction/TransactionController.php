<?php

namespace App\Http\Controllers\User\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $transaction = Order::where('user_id', auth()->user()->id)->get();

        return view('user.transaction.purchase_history', compact('transaction'));
    }
}
