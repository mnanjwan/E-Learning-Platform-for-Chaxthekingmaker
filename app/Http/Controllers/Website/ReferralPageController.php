<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Order;
use App\Models\Referral;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ReferralPageController extends Controller
{
    public function index($id) {

        $page_title = "Referral Chaxthekingmaker";


        return view('website.pages.referral.mentorship_referral', compact('page_title'), ['id' => $id]);
    }

    public function register(Request $request, $price, $id) {

         $validator = Validator::make(['value' => $price], [
            'value' => 'required|in:500,1000',
        ]);
        if ($validator->fails()) {
            return redirect()->back();
        }

        $countries = Country::all();

        return view('website.pages.referral.checkout_referral', ['id' => $id] , compact('price', 'countries'));
    }


    public function store(Request $request, $price, $id, $mentorship) {

    //    dd($request->all(), $price, $id, $mentorship);

       $validator = Validator::make($request->all(), [
        'surname' => 'required|string',
        'firstname' => 'required|string',
        'email' => 'required|unique:users',
        'country' => 'required',
        'phone' => 'required|unique:users',
        'password' => 'required'
    ]);

    if ($validator->fails()) {
        return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
    }

    $validator = Validator::make(['value' => $price], [
        'value' => 'required|in:500,1000',
    ]);
    if ($validator->fails()) {
        return redirect()->back();
    }

    // Create a new user record
    $user = new User();
    $user->surname = $request->input('surname');
    $user->firstname = $request->input('firstname');
    $user->email = $request->input('email');
    $user->country = $request->input('country');
    $user->phone = $request->input('phone');
    $user->referred_id = $id;
    $user->password = Hash::make($request->input('password'));
    $user->save();

    // Send email to user

    // Generate a random 5-digit number as the identifier
    $customId = mt_rand(10000, 99999);

    $order = new Order();
    $order->order_id = $customId;
    $order->product_name = $mentorship;
    $order->user_id = $user->id;
    $order->amount = $price;
    $order->status = 'pending';
    $order->payment_method = 'Bank Transfer';
    $order->save();

    $transaction = new Transaction();
    $transaction->user_id = $user->id;
    $transaction->order_id = $order->order_id;
    $transaction->type = "payment";
    $transaction->status = 'pending';
    $transaction->amount = $price;
    $transaction->save();

    $referral = new Referral();
    $referral->user_id = $id;
    $referral->referred_id  = $user->id;
    $referral->bonus_amount = $price * 0.1;
    $referral->save();

    // Send email to user

    return redirect()->route('payment', ['order_id' => $order->order_id])->with('success', 'Registration Successful, Please Login');
   }
}
