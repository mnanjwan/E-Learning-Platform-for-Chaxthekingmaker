<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function index (){
        // return view('user.auth.login');
        return view('website.pages.auth.auth_login');

    }
    public function loginAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            $user = Auth::user();

            if ($user->status === 'active') {
                // Authentication successful and user account is active
                return redirect('user/dashboard');
            } else {
                // User account is not active
                return redirect()->back()->withErrors(['Your account is not active, please contact the support team']);
            }
        } else {
            // Authentication failed
            return redirect()->back()->withInput()->withErrors(['Invalid credentials']);
        }

    }
}
