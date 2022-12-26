<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Daniel',
            'email' => 'daniel@email.com',
            'password' => Hash::make('danielasd'),
            'address' => 'Dummy address1',
            'phone' => '123123123',
            'role' => 'Admin'
        ]);
        User::insert([
            'name' => 'Ryanto',
            'email' => 'ryanto@email.com',
            'password' => Hash::make('ryantoasd'),
            'address' => 'Dummy address2',
            'phone' => '123',
            'role' => 'Member'
        ]);
    }
}
