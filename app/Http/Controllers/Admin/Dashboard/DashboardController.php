<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the "admin" guard
    }


    public function index()
    {
        $data['totalStudents'] = User::where('status', 'active')->count();

        $data['totalAmount'] = Transaction::where('status', 'completed')
            ->where('type', 'payment')
            ->sum('amount');

        $data['totalPendingPayment'] = Transaction::where('status', 'pending')
            ->where('type', 'payment')
            ->count();

        $data['totalWithdrawal'] = Transaction::where('status', 'completed')
            ->where('type', 'withdrawal')
            ->sum('amount');

        $data['totalPendingWithdrawal'] = Transaction::where('status', 'pending')
            ->where('type', 'withdrawal')
            ->count();

        $data['lifeTime'] = Order::where('status', 'completed')
            ->where('product_name', 'Life time mentorship')
            ->count();

        $data['oneYear'] = Order::where('status', 'completed')
            ->where('product_name', 'One year mentorship')
            ->count();

        $approve = Transaction::with('order')->where('status', 'pending')
            ->where('type', 'payment')
            ->get();

        $withdrawal = Transaction::with('user')->where('status', 'pending')
            ->where('type', 'withdrawal')
            ->get();

        return view('admin.dashboard.dashboard', compact('approve', 'withdrawal'), $data);
    }
}
