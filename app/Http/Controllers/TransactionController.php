<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function getTransactions() {
        return Transaction::select(
            'transactions.transaction_date', 'users.name',
            'products.product', 'transaction_details.qty',
            DB::raw('SUM(products.price * transaction_details.qty) AS total'),
            'products.price'
        )
        ->join('users', 'users.id', '=', 'transactions.user_id')
        ->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
        ->join('products', 'products.id', '=', 'transaction_details.product_id')
        ->groupBy(
            'transactions.transaction_date',
            'users.name',
            'products.product',
            'transaction_details.qty',
            'products.price'
        )
        ->get();
    }

    public function index() {
        return view('transaction.index', [
            'transactions' => $this->getTransactions()
        ]);
    }
}
