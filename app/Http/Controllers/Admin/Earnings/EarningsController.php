<?php

namespace App\Http\Controllers\Admin\Earnings;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class EarningsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the "admin" guard
    }
    
    public function index ()
    {

        $data['totalAmount'] = Transaction::where('status', 'completed' )
                                            ->where('type', 'payment')
                                            ->sum('amount');

        $data['totalWithdrawal'] = Transaction::where('status', 'completed' )
                                            ->where('type', 'withdrawal')
                                            ->sum('amount');
        $data['details'] = Transaction::with('user')->where('status', 'completed')
                                            ->get();

        return view('admin.earnings.earnings', $data);
    }
}
