<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;
use App\Models\User;
use Illuminate\Http\Request;

class ActivateUserController extends Controller
{
    
    public function activate($user_id) {
        $user = User::where('id', $user_id)->first();
        $user->status = 'active';
        $user->save();

        // Send email to user
        $replyToEmail = 'admin@chaxthekingmaker.com';
        $userEmail = $user->email;
        $subject = 'Account Activated';
        $body = "<h1>Hi " . $user->surname . ",</h1>
                        <p>
                        Your Account has been Activated, You can now login and gain access to the unlimited wealth of knowledge here for you.<br><br>
                        </p>
                        <br>";

        // EmailHelper::sendEmail($userEmail, $body, $subject, $replyToEmail);
        dispatch(new SendEmail($userEmail, $body, $subject, $replyToEmail));
          
        return redirect()->back()->with('success', 'User Activated Successfully');
    }
}
