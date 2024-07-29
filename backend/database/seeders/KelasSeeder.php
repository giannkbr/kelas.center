<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            'category_kelas_id' => 1,
            'mentors_id' => 1,
            'name' => 'Web Development',
            'thumbnail' => 'thumbnail.png',
        ]);

        Kelas::create([
            'category_kelas_id' => 2,
            'mentors_id' => 2,
            'name' => 'Web Development',
            'thumbnail' => 'thumbnail.png',
        ]);

        Kelas::create([
            'category_kelas_id' => 3,
            'mentors_id' => 3,
            'name' => 'Web Development',
            'thumbnail' => 'thumbnail.png',
        ]);
    }
}
