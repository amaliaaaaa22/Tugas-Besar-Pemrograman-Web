<?php
// TransactionPassengerController.php
namespace App\Http\Controllers;

use App\Models\TransactionPassenger;
use Illuminate\Http\Request;

class TransactionPassengerController extends Controller
{
    public function index()
    {
        $passengers = TransactionPassenger::all();
        return view('transaction_passengers.index', compact('passengers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'negara' => 'required|string|max:255',
        ]);

        TransactionPassenger::create([
            'transaksi_id' => 1, // You'll need to adjust this based on your needs
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'negara' => $request->negara,
        ]);

        return redirect()->route('transaction.index')->with('success', 'Passenger added successfully');
    }

    public function update(Request $request, $id)
    {
        $passenger = TransactionPassenger::findOrFail($id);
        
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'negara' => 'required|string|max:255',
        ]);

        $passenger->update([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'negara' => $request->negara,
        ]);

        return redirect()->route('transaction.index')->with('success', 'Passenger updated successfully');
    }

    public function destroy($id)
    {
        $passenger = TransactionPassenger::findOrFail($id);
        $passenger->delete();
        return redirect()->route('transaction.index')->with('success', 'Passenger deleted successfully');
    }
}