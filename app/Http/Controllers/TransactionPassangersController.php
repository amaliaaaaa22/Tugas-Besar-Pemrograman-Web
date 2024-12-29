<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionPassangersController extends Controller
{
    public function index()
    {
        $passengers = TransactionPassenger::all();
        return view('transaction_passengers', compact('passengers'));
    }

    public function store(Request $request)
    {
        TransactionPassenger::create($request->all());
        return redirect()->route('transaction_passengers.index');
    }

    public function destroy($id)
    {
        $passenger = TransactionPassenger::findOrFail($id);
        $passenger->delete();
        return redirect()->route('transaction_passengers.index');
    }

}
