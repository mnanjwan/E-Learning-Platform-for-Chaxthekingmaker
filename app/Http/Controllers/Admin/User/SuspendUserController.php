<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;
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

        $user = User::where('id', $user_id)->first();
        $user->status = 'disabled';
        $user->save();

        // Send email to user
        $replyToEmail = 'admin@chaxthekingmaker.com';
        $userEmail = $user->email;
        $subject = 'Account Suspended';
        $body = "<h1>Hi " . $user->surname . ",</h1>
                        <p>
                        Your Account has been Suspended, please contact the admin and fulfil all requirements to get your account activated.<br><br>
                        </p>
                        <br>";

        // EmailHelper::sendEmail($userEmail, $body, $subject, $replyToEmail);
        try {
            dispatch(new SendEmail($userEmail, $body, $subject, $replyToEmail));
        } catch (\Exception $ex) {}


        return redirect()->back()->with('success', 'User Approved Successfully');
    }
}
