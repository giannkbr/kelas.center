<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mentor;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mentor::create([
            'name' => 'Mentor Pertama',
            'email' => 'john.doe@example.com',
            'profession' => 'Web Developer',
        ]);

        Mentor::create([
            'name' => 'Mentor Kedua',
             'email' => 'john.doe@example.com',
            'profession' => 'Web Developer',
        ]);

        Mentor::create([
            'name' => 'Mentor Ketiga',
            'email' => 'john.doe@example.com',
            'profession' => 'Web Developer',
        ]);
    }
}
