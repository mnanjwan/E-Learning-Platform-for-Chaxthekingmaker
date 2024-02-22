<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SuspendAllUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the "admin" guard
    }
    
    public function suspendAllUsers()
    {
        // dd('hello');
        $users = User::all();
        foreach ($users as $user) {
            $user->update(['status' => 'disabled']);
        }
        Session::flash('success', 'All student suspended successfully');

        return redirect()->back();
    }
}
