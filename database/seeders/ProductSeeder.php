<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            'name' => 'All My Tears',
            'description' => 'desc',
            'price' => '22000',
            'stock' => '15',
            'image' => 'AllMyTears.png',
            'category_id' => '1'
        ]);
        Product::insert([
            'name' => 'Bohemian Rhapsody',
            'description' => 'desc',
            'price' => '25000',
            'stock' => '14',
            'image' => 'BohemianRhapsody.png',
            'category_id' => '2'
        ]);
        Product::insert([
            'name' => 'Dandelions',
            'description' => 'desc',
            'price' => '23000',
            'stock' => '15',
            'image' => 'Dandelions.png',
            'category_id' => '3'
        ]);
        Product::insert([
            'name' => 'Father and Son',
            'description' => 'desc',
            'price' => '25000',
            'stock' => '11',
            'image' => 'FatherAndSon.png',
            'category_id' => '1'
        ]);
        Product::insert([
            'name' => 'Frankenstein',
            'description' => 'desc',
            'price' => '20000',
            'stock' => '12',
            'image' => 'Frankenstein.png',
            'category_id' => '2'
        ]);
        Product::insert([
            'name' => 'Hotel California',
            'description' => 'desc',
            'price' => '22000',
            'stock' => '12',
            'image' => 'HotelCalifornia.png',
            'category_id' => '3'
        ]);
        Product::insert([
            'name' => 'Imagine',
            'description' => 'desc',
            'price' => '20000',
            'stock' => '11',
            'image' => 'Imagine.jpg',
            'category_id' => '1'
        ]);
        Product::insert([
            'name' => 'Let It Be',
            'description' => 'desc',
            'price' => '30000',
            'stock' => '17',
            'image' => 'LetItBe.jpg',
            'category_id' => '2'
        ]);
        Product::insert([
            'name' => 'Love Of My Life',
            'description' => 'desc',
            'price' => '25000',
            'stock' => '16',
            'image' => 'LoveOfMyLife.jpg',
            'category_id' => '3'
        ]);
        Product::insert([
            'name' => 'Sweet Child O Mine',
            'description' => 'desc',
            'price' => '21000',
            'stock' => '13',
            'image' => 'SweetChildOMine.png',
            'category_id' => '1'
        ]);
        Product::insert([
            'name' => 'Tears In Heaven',
            'description' => 'desc',
            'price' => '21000',
            'stock' => '14',
            'image' => 'TearsInHeaven.jpg',
            'category_id' => '2'
        ]);
        Product::insert([
            'name' => 'The House Of The Rising Sun',
            'description' => 'desc',
            'price' => '20000',
            'stock' => '16',
            'image' => 'TheHouseOfTheRisingSun.jpg',
            'category_id' => '3'
        ]);
        Product::insert([
            'name' => 'Until I Found You',
            'description' => 'desc',
            'price' => '25000',
            'stock' => '15',
            'image' => 'UntilIFoundYou.png',
            'category_id' => '1'
        ]);
        Product::insert([
            'name' => 'What A Wonderful World',
            'description' => 'desc',
            'price' => '22000',
            'stock' => '10',
            'image' => 'WhatAWonderfulWorld.jpg',
            'category_id' => '2'
        ]);
        Product::insert([
            'name' => 'Wonderful Tonight',
            'description' => 'desc',
            'price' => '23000',
            'stock' => '11',
            'image' => 'WonderfulTonight.jpg',
            'category_id' => '3'
        ]);
    }
}
