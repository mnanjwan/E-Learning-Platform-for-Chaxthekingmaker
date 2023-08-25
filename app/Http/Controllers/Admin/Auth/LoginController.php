<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function loginAction(Request $request)
    {

        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {

            // Authentication successful
            return redirect()->intended('chaxadmin/dashboard');
        }
        // Authentication failed
        return redirect()->back()->withInput()->withErrors(['Invalid credentials']);
    }
}
