<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subscriptions;

class SubscriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscriptions::create([
            'user_id' => 1,
            'start_date' => '2023-07-01',
            'end_date' => '2023-07-31',
            'amount' => 69000
        ]);

        Subscriptions::create([
            'user_id' => 2,
            'start_date' => '2023-07-01',
            'end_date' => '2023-07-31',
            'amount' => 69000
        ]);

        Subscriptions::create([
            'user_id' => 3,
            'start_date' => '2023-07-01',
            'end_date' => '2023-07-31',
            'amount' => 69000
        ]);
    }
}
