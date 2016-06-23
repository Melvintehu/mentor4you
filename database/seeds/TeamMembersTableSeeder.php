<?php

use Illuminate\Database\Seeder;

class TeamMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TeamMember::class, 10)->create();
    }
}
