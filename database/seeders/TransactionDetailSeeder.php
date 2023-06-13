<?php

namespace Database\Seeders;

use App\Models\TransactionDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'transaction_id' => 1,
                'product_id' => 1,
                'qty' => 2
            ]
        ])
        ->each(fn ($transaction) => TransactionDetail::create($transaction));
    }
}
