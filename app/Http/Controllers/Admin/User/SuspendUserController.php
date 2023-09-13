<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class SuspendUserController extends Controller
{


    public function index()
    {
        $disabled_users = Order::where('status', 'completed')->get('user_id');
        dd($disabled_users);
        $user = User::with('orders')->where('status', 'disabled')->get();

        return view('admin.user.suspended', compact('user'));
        // return view('admin.user.approve');
    }

    public function approve($user_id)
    {
        // dd($order_id);


        $user = User::where('id', $user_id)->first();
        $user->status = 'disabled';
        $user->save();

        // Send email to user
        return redirect()->back()->with('success', 'User Approved Successfully');
    }
}
