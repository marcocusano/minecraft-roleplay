<?php

namespace App\Http\Controllers;

// Laravel
use Illuminate\Routing\Controller;
// Models
use App\Models\Transaction;
// Resource
use App\Http\Resources\TransactionResource;

class Transactions extends Controller {

    ////////////////
    // A.C.R.U.D. //
    ////////////////

    public function all() {
        $companies = Transaction::all();
        return response()->json($companies);
    }

    public function create(\App\Http\Requests\Transactions\CreateRequest $request) {
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

    public function update($id, \App\Http\Request\Transactions\CreateRequest $request) {
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