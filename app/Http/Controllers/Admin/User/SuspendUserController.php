<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuspendUserController extends Controller
{


    public function index()
    {
        $user = DB::table('users')

        ->join('orders', 'users.id', '=', 'orders.user_id')
        ->where('users.status', 'disabled')
        ->select('users.*', 'orders.status')
        ->where('orders.status', 'completed')->get();


        // $user = User::with('orders')->where('status', 'disabled')->get();

        return view('admin.user.suspended', compact('user'));
    }

    public function suspend($user_id)
    {
        // dd($order_id);


        $user = User::where('id', $user_id)->first();
        $user->status = 'disabled';
        $user->save();

        // Send email to user
        return redirect()->back()->with('success', 'User Approved Successfully');
    }
}
