<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;
use App\Models\Order;
use App\Models\Referral;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ApproveUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the "admin" guard
    }

    public function index()
    {
        $user = User::with('orders')->where('status', 'disabled')->orderBy('id', 'DESC')->get();

        return view('admin.user.approve', compact('user'));
        // return view('admin.user.approve');
    }

    public function approve($order_id)
    {

        $order = Order::where('order_id', $order_id)->first();
        $order->status = 'completed';
        $order->save();

        $transaction = Transaction::where('order_id', $order_id)->first();
        $transaction->status = 'completed';
        $transaction->save();

        // $order = Order::with('user')->where('order_id', $order_id)->first();
        // $user = $order->referred_id;
        // $referral_bonus = Referral::where('user_id', $user)->first();

        // // dd($referral_bonus);
        // if ($referral_bonus) {
        //     $amount = $referral_bonus->bonus_amount;
        //     $user = User::where('id', $user)->first();
        //     $user->wallet += $amount;
        //     $user->save();
        // }


        $user = User::where('id', $order->user_id)->first();
        $user->status = 'active';
        $user->save();

        // Send email to user
        $replyToEmail = 'admin@chaxthekingmaker.com';
        $userEmail = $user->email;
        $subject = 'Account Approved';
        $body = "<h1>Hi " . $user->surname . ",</h1>
                        <p>
                        Your Account has been Approved, You can now login and gain access to the unlimited wealth of knowledge here for you.<br><br>
                        </p>
                        <br>";

        // EmailHelper::sendEmail($userEmail, $body, $subject, $replyToEmail);
        try {
            dispatch(new SendEmail($userEmail, $body, $subject, $replyToEmail));
        } catch (\Exception $ex) {}

        return redirect()->back()->with('success', 'User Approved Successfully');
    }
}
