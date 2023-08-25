<?php

namespace App\Http\Controllers\User\Withdraw;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class WithdrawController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['details'] = Transaction::with('user')->where('user_id', auth()->user()->id)
                                                    ->where('type', 'withdrawal')
                                                    ->get();

        return view('user.withdraw.index', $data);
    }

    public function process(Request $request)
    {

        $withdrawalAmount = $request->input('amount');
        $user = User::find(auth()->user()->id);

        if ($user->wallet < $withdrawalAmount) {
            throw ValidationException::withMessages([
                'amount' => ['Insufficient balance'],
            ]);
        }
        $user->wallet -= $withdrawalAmount;
        $user->save();

        $transaction = new Transaction();
        $transaction->user_id = auth()->user()->id;
        $transaction->order_id = "withdraw";
        $transaction->type = "withdrawal";
        $transaction->status = 'pending';
        $transaction->amount = $withdrawalAmount;
        $transaction->save();

        #Email
        return redirect()->back()->with('success', 'Your withdrawal is being processed');

    }
}
