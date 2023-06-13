<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'transaction_date' => date('Y-m-d'),
                'user_id' => 1,
            ]
        ])
        ->each(fn ($transaction) => Transaction::create($transaction));
    }
}
