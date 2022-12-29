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
            'name' => 'Folk'
        ]);
        Category::insert([
            'name' => 'Pop'
        ]);
        Category::insert([
            'name' => 'Rock'
        ]);
        Category::insert([
            'name' => 'Soft Rock'
        ]);
        Category::insert([
            'name' => 'Jazz'
        ]);

    }
}
