<?php

namespace App\Http\Controllers;

use App\Models\transaction_passengers;
use Illuminate\Http\Request;
use App\Models\TransactionPassenger;

class TransactionPassengerController extends Controller
{
    public function index()
    {
        $passengers = transaction_passengers::all();
        return view('transaction_passengers', compact('passengers'));
    }

    public function store(Request $request)
    {
        transaction_passengers::create($request->all());
        return redirect()->route('transaction_passengers.index');
    }

    public function destroy($id)
    {
        $passenger = transaction_passengers::findOrFail($id);
        $passenger->delete();
        return redirect()->route('transaction.index');
    }
}
