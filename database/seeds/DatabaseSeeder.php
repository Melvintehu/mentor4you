<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(CandidatesTableSeeder::class);
         $this->call(MentorsTableSeeder::class);
         $this->call(NewsTableSeeder::class);
         $this->call(PartnersTableSeeder::class);
         $this->call(TeamMembersTableSeeder::class);
         $this->call(YouthTableSeeder::class);
    }
}
