<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersSeeder::class);
        $this->call(MentorSeeder::class);
        $this->call(CategoryKelasSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(SubscriptionsSeeder::class);
        $this->call(WatchtimeSeeder::class);
    }
}
