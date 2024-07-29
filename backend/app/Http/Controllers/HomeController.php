<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryBenefits;
use App\Models\Benefits;
use App\Models\CategoryKelas;
use App\Models\Kelas;

class HomeController extends Controller
{

	function index()
	{
        $benefits = Benefits::all();
        $categoryBenefits = CategoryBenefits::all();
        $categoryKelas = CategoryKelas::all();
        $kelas = Kelas::all();

        // var_dump($kelas);exit;
        return view('frontend.layouts.app', compact('categoryBenefits' , 'benefits', 'categoryKelas', 'kelas'));
	}
}
