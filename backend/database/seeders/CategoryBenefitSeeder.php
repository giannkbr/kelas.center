<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryBenefits;

class CategoryBenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryBenefits::create([
            'name' => 'LMS',
        ]);

        CategoryBenefits::create([
            'name' => 'Inqury Learning',
        ]);

        CategoryBenefits::create([
            'name' => 'Featured',
        ]);
    }
}
