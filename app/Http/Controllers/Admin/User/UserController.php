<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the "admin" guard
    }
    
    public function index() {

        $user = User::with('orders')->where('status', 'active')->get();
    
        return view('admin.user.index', compact('user'));
    }
}
