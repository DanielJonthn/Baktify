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
            'description' => '"All My Tears", a song by Julie Miller with Emmylou Harris, also covered by Harris and separately covered by jazz vocalist Jimmy Scott and later on by Norwegian artist Ane Brun',
            'price' => '22000',
            'stock' => '11',
            'image' => 'AllMyTears.png',
            'category_id' => '1'
        ]);
        Product::insert([
            'name' => 'Bohemian Rhapsody',
            'description' => '"Bohemian Rhapsody" is a song by the British rock band Queen, released as the lead single from their fourth album, A Night at the Opera (1975).',
            'price' => '25000',
            'stock' => '12',
            'image' => 'BohemianRhapsody.png',
            'category_id' => '3'
        ]);
        Product::insert([
            'name' => 'Dandelions',
            'description' => '"Dandelions" is a song by Canadian singer Ruth B., originally released as a promotional single from her 2017 album Safe Haven.',
            'price' => '23000',
            'stock' => '15',
            'image' => 'Dandelions.png',
            'category_id' => '2'
        ]);
        Product::insert([
            'name' => 'Father and Son',
            'description' => '"Father and Son" is a popular song written and performed by English singer-songwriter Cat Stevens (now known as Yusuf Islam/Cat Stevens) on his 1970 album Tea for the Tillerman.',
            'price' => '25000',
            'stock' => '11',
            'image' => 'FatherAndSon.png',
            'category_id' => '1'
        ]);
        Product::insert([
            'name' => 'Frankenstein',
            'description' => '"Frankenstein" is a song by American singer Claire Rosinkranz from her 2021 album 6 Of A Billion.',
            'price' => '20000',
            'stock' => '12',
            'image' => 'Frankenstein.png',
            'category_id' => '4'
        ]);
        Product::insert([
            'name' => 'Hotel California',
            'description' => '"Hotel California" is the title track from the Eagles album of the same name and was released as a single in February 1977.',
            'price' => '22000',
            'stock' => '12',
            'image' => 'HotelCalifornia.png',
            'category_id' => '3'
        ]);
        Product::insert([
            'name' => 'Imagine',
            'description' => '"Imagine" is a song by English rock musician John Lennon from his 1971 album of the same name.',
            'price' => '20000',
            'stock' => '11',
            'image' => 'Imagine.jpg',
            'category_id' => '2'
        ]);
        Product::insert([
            'name' => 'Let It Be',
            'description' => '"Let It Be" is the twelfth and final studio album by the English rock band the Beatles. It was released on 8 May 1970, almost a month after the group public break-up.',
            'price' => '30000',
            'stock' => '17',
            'image' => 'LetItBe.jpg',
            'category_id' => '1'
        ]);
        Product::insert([
            'name' => 'Love Of My Life',
            'description' => '"Love of My Life" is a song by the British rock band Queen from their 1975 album A Night at the Opera.',
            'price' => '25000',
            'stock' => '16',
            'image' => 'LoveOfMyLife.jpg',
            'category_id' => '4'
        ]);
        Product::insert([
            'name' => 'Sweet Child O Mine',
            'description' => '"Sweet Child o Mine" is a song by American rock band Guns N Roses. It appears on their debut album, Appetite for Destruction.',
            'price' => '21000',
            'stock' => '13',
            'image' => 'SweetChildOMine.png',
            'category_id' => '3'
        ]);
        Product::insert([
            'name' => 'Tears In Heaven',
            'description' => '"Tears in Heaven" is a song by English guitarist, singer, and songwriter Eric Clapton and Will Jennings, written about the death of Claptons four-year-old son, Conor.',
            'price' => '21000',
            'stock' => '14',
            'image' => 'TearsInHeaven.jpg',
            'category_id' => '4'
        ]);
        Product::insert([
            'name' => 'The House Of The Rising Sun',
            'description' => '"The House of the Rising Sun" is a traditional folk song, sometimes called "Rising Sun Blues". It tells of a persons life gone wrong in the city of New Orleans.',
            'price' => '20000',
            'stock' => '16',
            'image' => 'TheHouseOfTheRisingSun.jpg',
            'category_id' => '1'
        ]);
        Product::insert([
            'name' => 'Until I Found You',
            'description' => '"Until I Found You" is a song by American singer-songwriter Stephen Sanchez, released on September 1, 2021.',
            'price' => '25000',
            'stock' => '15',
            'image' => 'UntilIFoundYou.png',
            'category_id' => '2'
        ]);
        Product::insert([
            'name' => 'What A Wonderful World',
            'description' => '"What a Wonderful World" is a song written by Bob Thiele (as "George Douglas") and George David Weiss. It was first recorded by Louis Armstrong and released in 1967 as a single.',
            'price' => '22000',
            'stock' => '10',
            'image' => 'WhatAWonderfulWorld.jpg',
            'category_id' => '5'
        ]);
        Product::insert([
            'name' => 'Wonderful Tonight',
            'description' => '"Wonderful Tonight" is a ballad written by Eric Clapton. It was included on Claptons 1977 album Slowhand. Clapton wrote the song about Pattie Boyd.',
            'price' => '23000',
            'stock' => '11',
            'image' => 'WonderfulTonight.jpg',
            'category_id' => '4'
        ]);
    }
}