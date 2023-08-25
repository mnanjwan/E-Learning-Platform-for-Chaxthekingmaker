<?php

namespace App\Http\Controllers\Admin\Referral;

use App\Http\Controllers\Controller;
use App\Models\Referral;
use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the "admin" guard
    }
    
    public function index() {

        $referrals = Referral::with('user')->get();
        return view('admin.referral.index', compact('referrals'));
    }
}
