<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the "admin" guard
    }
    
    public function index() {

    }

    public function approve($transaction_id) {

        $withdrawal = Transaction::with('user')->where('status', 'pending')
                                            ->where('id', $transaction_id)
                                            ->first();

        $withdrawal->status = 'completed';
        $withdrawal->save();

        // Send email to user
        return redirect()->back()->with('success', 'User Approved Successfully');
    }

    public function withdraw() {

        $withdrawal = Transaction::with('user')->where('status', 'completed')
        ->where('type', 'withdrawal')
        ->get();

        return view('admin.transaction.withdraw', compact('withdrawal'));
    }
}
