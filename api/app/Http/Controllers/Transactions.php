<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Resources\TransactionResource;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Transactions extends Controller {

    ////////////////
    // A.C.R.U.D. //
    ////////////////

    public function all() {
        $companies = Transaction::all();
        return response()->json($companies);
    }

    public function create(Request $request) {
        $data = $request->validated();
        $transaction = new Transaction();
        $transaction->fill($data);
        $transaction->save();
        return response()->json($transaction, 201);
    }

    public function read($id) {
        $transaction = Transaction::findOrFail($id);
        return response()->json($transaction);
    }

    public function update($id, Request $request) {
        $transaction = Transaction::findOrFail($id);
        $data = $request->validate(TransactionResource::rules($request));
        $transaction->update($data);
        return response()->json($transaction);
    }

    public function delete($id) {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
        return response()->json([], 204);
    }

    ///////////////
    // Relations //
    ///////////////

    public function receiver($id) {
        $transaction = Transaction::findOrFail($id);
        return response()->json($transaction->receiver());
    }

    public function sender($id) {
        $transaction = Transaction::findOrFail($id);
        return response()->json($transaction->sender());
    }

    public function updater($id) {
        $transaction = Transaction::findOrFail($id);
        return response()->json($transaction->updater());
    }

}