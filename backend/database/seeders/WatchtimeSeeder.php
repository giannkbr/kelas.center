<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Watchtimes;

class WatchtimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Watchtimes::insert([
            ['user_id' => 1, 'class_id' => 1, 'watch_time' => 20],
            ['user_id' => 1, 'class_id' => 2, 'watch_time' => 50],
            ['user_id' => 1, 'class_id' => 3, 'watch_time' => 30]
        ]);
    }
}
