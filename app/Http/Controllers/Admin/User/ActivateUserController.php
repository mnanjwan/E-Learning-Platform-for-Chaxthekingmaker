<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ActivateUserController extends Controller
{
    
    public function activate($user_id) {
        $user = User::where('id', $user_id)->first();
        $user->status = 'active';
        $user->save();

        // Send email to user
        return redirect()->back()->with('success', 'User Activated Successfully');
    }
}
