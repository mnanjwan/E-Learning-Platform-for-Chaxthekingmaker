<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('user.profile.settings');
    }
}
