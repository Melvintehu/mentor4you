<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();


        // maken van alle pages op de website
        DB::table('pages')->insert([
                'name' => 'Homepage',
            ]);
        DB::table('pages')->insert([
                'name' => 'Over ons',
            ]);
        DB::table('pages')->insert([
                'name' => 'Actueel',
            ]);
        DB::table('pages')->insert([
                'name' => 'Resultaten',
            ]);
        DB::table('pages')->insert([
                'name' => 'Steun ons',
            ]);
        DB::table('pages')->insert([
                'name' => 'Contact',
            ]);
        DB::table('pages')->insert([
                'name' => 'Slider',
            ]);
    }
}
