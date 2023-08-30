<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Helpers\EmailHelper;


class CheckoutPageController extends Controller
{
    public function index($price)
    {
        $page_title = "Checkout Chaxthekingmaker";

        $validator = Validator::make(['value' => $price], [
            'value' => 'required|in:500,1000',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back();
        }

        $countries = Country::all();

        return view('website.pages.checkout', compact('price', 'countries', 'page_title'));
    }


    public function checkout_process(Request $request, $price, $mentorship)
    {
        // dd($request->all());
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

        // Create a new user record
        $user = new User();
        $user->surname = $request->input('surname');
        $user->firstname = $request->input('firstname');
        $user->email = $request->input('email');
        $user->country = $request->input('country');
        $user->phone = $request->input('phone');
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

        // Send email to user
        //  $body = "<h1>Hi ".$user->surname." ,</h1>
        //                 <p>Your Request for investment was rejected, please contact admin. 😢<br><br>
        //                 Amount: $".$transaction->amount."<br>
        //                 <br><br>
        //                 </p>";
        
        // $to = $user->email;
        // $subject = 'Investment Notice';
        // $replyToEmail = 'admin@chaxthekingmaker.com';
        // EmailHelper::sendEmail($to, $body, $subject, $replyToEmail);

        return redirect()->route('payment', ['order_id' => $order->order_id])->with('success', 'Registration Successful, Please Login');
    }
}
