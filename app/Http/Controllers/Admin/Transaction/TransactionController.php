<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the "admin" guard
    }
    
    public function payment() {

        $approve = Transaction::with('order')->where('status', 'completed')
        ->where('type', 'payment')
        ->get();

        return view('admin.transaction.payment', compact('approve'));
    }


}
