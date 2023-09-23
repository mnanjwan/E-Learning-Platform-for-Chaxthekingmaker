<?php

namespace App\Http\Controllers\Admin\Broadcast;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AllUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the "admin" guard
    }
    
    public function index()
    {
        return view('admin.Broadcast.alluser');
    }

    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subject' => 'required|string',
            'body' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
       

        // Send email to user
        $replyToEmail = 'admin@chaxthekingmaker.com';
        $user = User::where('status', 'active')->pluck('email')->all();
        $subject = $request->subject;
        $body = $request->body;

        foreach ($user as $userEmail) {

            dispatch(new SendEmail($userEmail, $body, $subject, $replyToEmail));
        }

        // EmailHelper::sendEmail($userEmail, $body, $subject, $replyToEmail);
        return redirect()->back()->with('success', 'Messages sent');
        
    }
}
