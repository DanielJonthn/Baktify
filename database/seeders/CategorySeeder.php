<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            'name' => 'Classic'
        ]);
        Category::insert([
            'name' => 'Rock'
        ]);
        Category::insert([
            'name' => 'Romance'
        ]);

    }
}
