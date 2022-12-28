<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Transaction::insert([
            'transaction_detail_id' => '1',
            'product_id' => '1',
            'quantity' => '3'
        ]);
        Transaction::insert([
            'transaction_detail_id' => '1',
            'product_id' => '2',
            'quantity' => '5'
        ]);

        Transaction::insert([
            'transaction_detail_id' => '2',
            'product_id' => '9',
            'quantity' => '8'
        ]);
        Transaction::insert([
            'transaction_detail_id' => '2',
            'product_id' => '6',
            'quantity' => '1'
        ]);
    }
}
