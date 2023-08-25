<?php

namespace App\Http\Controllers\User\Referral;

use App\Http\Controllers\Controller;
use App\Models\Referral;
use App\Models\User;
use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function index() {

        $referrals = Referral::where('user_id', auth()->user()->id)->with('user')->get();

        return view('user.referral.referral', compact('referrals'));
    }
}
