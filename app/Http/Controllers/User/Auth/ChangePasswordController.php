<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('user.profile.settings');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);
        dd($request->all());
        // $user = Auth::user();
        $user = User::find(auth()->user()->id);

        if (!Hash::check($request->current_password, $user->password)) {
            
            return back()->withErrors(['current_password' => 'Incorrect current password.']);
           
        } 
        $user->update([
            'password' => Hash::make($request->password)
        ]);

       
        return redirect()->url('user/settings/#password')->with('success', 'Password changed successfully.');
        
    }
}
