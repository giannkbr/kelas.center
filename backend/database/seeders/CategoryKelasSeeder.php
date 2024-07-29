<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryKelas;

class CategoryKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryKelas::create([
            'name' => 'Kelas.com',
        ]);

        CategoryKelas::create([
            'name' => 'Kelas.work',
        ]);

        CategoryKelas::create([
            'name' => 'Bootcamp',
        ]);
    }
}
