<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Referral;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class ApproveUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the "admin" guard
    }
    
    public function index()
    {
        $user = User::with('orders')->where('status', 'disabled')->get();

        return view('admin.user.approve', compact('user'));
        // return view('admin.user.approve');
    }

    public function approve($order_id)
    {
        // dd($order_id);

        $order = Order::where('order_id', $order_id)->first();
        $order->status = 'completed';
        $order->save();

        $transaction = Transaction::where('order_id', $order_id)->first();
        $transaction->status = 'completed';
        $transaction->save();

        $order = Order::with('user')->where('order_id', $order_id)->first();
        $user = $order->user->referred_id;
        $referral_bonus = Referral::where('user_id', $user)->first();
        
        // dd($referral_bonus);
        if ($referral_bonus) {
            $amount = $referral_bonus->bonus_amount;
            $user = User::where('id', $user)->first();
            $user->wallet += $amount;
            $user->save();
        }
        $user = User::where('id', $order->user->id)->first();
        $user->status = 'active';
        $user->save();

        // Send email to user
        return redirect()->back()->with('success', 'User Approved Successfully');
    }
}
