<?php

use Illuminate\Database\Seeder;

class YouthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Youth::class, 10)->create();
    }
}
