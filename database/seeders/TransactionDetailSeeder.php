<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TransactionDetail;
class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransactionDetail::insert([
            'user_id' => '2'
        ]);

        TransactionDetail::insert([
            'user_id' => '2'
        ]);

        TransactionDetail::insert([
            'user_id' => '1'
        ]);
    }
}
