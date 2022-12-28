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
            'user_id' => '2',
            'date' => '2022-08-11'
        ]);

        TransactionDetail::insert([
            'user_id' => '2',
            'date' => '2022-08-12'
        ]);

        TransactionDetail::insert([
            'user_id' => '1',
            'date' => '2022-08-13'
        ]);
    }
}
