<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Wallet;

class MainController extends Controller
{
    public function dashboard()
    {

        $idLogin = auth()->id();
        // dd($idLogin);
        $userWallet = Wallet::where('user_id', $idLogin)->first();

        $idWallet =  $userWallet->id;
        $userTransactions = Transaction::where('wallet_id', $idWallet)->get();
        //dd($userWallet);
        ///dd($userTransactions);




        return view('dashboardView', compact('userWallet', 'userTransactions'));
    }

    public function storeTransaction(Request $request)
    {
        // Mendapatkan ID wallet atau cara lain untuk mengidentifikasi wallet yang sesuai
        // Ganti dengan cara yang sesuai dengan aplikasi Anda
    
       
        $walletId=  $request->input('idwallet');
        
        $wallet = Wallet::findOrFail($walletId);
    
        $transactionType = $request->input('transactionType');
        $amount = $request->input('amount');
    
        if ($transactionType == "in") {
            $balanceUpdate = $wallet->balance + $amount;
        } elseif ($transactionType == "out") {
            $balanceUpdate = $wallet->balance - $amount;
        }
    
        // Update nilai saldo pada model Wallet
        $wallet->update(['balance' => $balanceUpdate]);
    
        // Lanjutkan dengan menyimpan data transaksi atau tindakan lain yang diperlukan
    
        return redirect()->back()->with('success', 'Transaction saved successfully.');
    }
}
