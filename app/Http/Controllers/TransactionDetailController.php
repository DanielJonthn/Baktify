<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TransactionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getTransaction(){
        $transactions = DB::table('transaction_detail')->where('user_id', 'LIKE', Auth::user()->id)->get();
        $transactions2 = Transaction::all();
        $user = User::findOrFail(Auth::user()->id);
        return view('pages.transaction', compact('user'));

    }
}