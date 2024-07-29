<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Benefits;

class BenefitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Benefits::create([
            'title' => 'Optimalkan potensi karyawan Anda dengan Learning Management System (LMS)',
            'url' => 'https://www.google.com',
            'category_id' => 1,
            'description' => 'Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kami!',
            'benefits' => 'Issued Certificate Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.'
        ]);
    }
}
